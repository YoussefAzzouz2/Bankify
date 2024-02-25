<?php

namespace App\Controller;

use App\Entity\Carte;
use App\Form\CarteType;
use App\Repository\CarteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\CompteClient;
use Dompdf\Dompdf;
use Symfony\Component\HttpFoundation\JsonResponse;



#[Route('/carte')]
class CarteController extends AbstractController
{
    #[Route('/', name: 'app_carte_index', methods: ['GET'])]
    public function index(CarteRepository $carteRepository): Response
    {
        $visaCount = $carteRepository->countByType('visa');
        $mastercardCount = $carteRepository->countByType('mastercard');

        return $this->render('carte/index.html.twig', [
            'cartes' => $carteRepository->findAll(),
            'visaCount' => $visaCount,
            'mastercardCount' => $mastercardCount,
        ]);
    }

    #[Route('/new', name: 'app_carte_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $carte = new Carte();
        $form = $this->createForm(CarteType::class, $carte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($carte);
            $entityManager->flush();

            return $this->redirectToRoute('app_carte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('carte/new.html.twig', [
            'carte' => $carte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_carte_show', methods: ['GET'])]
    public function show(Carte $carte): Response
    {
        return $this->render('carte/show.html.twig', [
            'carte' => $carte,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_carte_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Carte $carte, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CarteType::class, $carte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_carte_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('carte/edit.html.twig', [
            'carte' => $carte,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_carte_delete', methods: ['POST'])]
    public function delete(Request $request, Carte $carte, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carte->getId(), $request->request->get('_token'))) {
            $entityManager->remove($carte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_carte_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/carte/generate-pdf', name: 'generate_pdf', methods: ['GET'])]
    public function generatePdf(CarteRepository $carteRepository): Response
{
    $cartes = $carteRepository->findAll();

    // Render the Twig template to HTML
    $html = $this->renderView('carte/pdfcarte.html.twig', [
        'cartes' => $cartes,
    ]);

    // Generate PDF
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Return PDF as response
    $pdfContent = $dompdf->output();
    return new Response($pdfContent, Response::HTTP_OK, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="cartes.pdf"',
    ]);}

    #[Route('/carte/search', name: 'carte_search')]
    public function search(Request $request, CarteRepository $carteRepository): JsonResponse
    {
    $query = $request->query->get('q');
    $cartes = $carteRepository->search($query); // Implement your search logic in the repository

    // Serialize the cartes data to return as JSON
    $serializedCartes = $this->serializeCartes($cartes);

    return new JsonResponse($serializedCartes);
    }

    // Helper function to serialize Carte entities
    private function serializeCartes($cartes)
    {
        $serialized = [];
        foreach ($cartes as $carte) {
            $serialized[] = [
                'id' => $carte->getId(),
                'NumC' => $carte->getNumC(),
                'DateExp' => $carte->getDateExp() ? $carte->getDateExp()->format('Y-m-d') : null,
                'TypeC' => $carte->getTypeC(),
                'StatutC' => $carte->getStatutC(),
                'type' => $carte->getType(),
                // Add more fields as needed
            ];
        }
        return $serialized;
    }
}
