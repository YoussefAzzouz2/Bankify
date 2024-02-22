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

#[Route('/carte')]
class CarteController extends AbstractController
{
    #[Route('/', name: 'app_carte_index', methods: ['GET'])]
    public function index(CarteRepository $carteRepository): Response
    {
        return $this->render('carte/index.html.twig', [
            'cartes' => $carteRepository->findAll(),
        ]);
    }

    #[Route('/{id}/cartes', name: 'carte_index_for_compte', methods: ['GET'])]
    public function indexForCompte(CompteClient $compte, CarteRepository $carteRepository): Response
    {
    // Récupérer le compte client spécifique
    $compte = $this->getDoctrine()->getRepository(CompteClient::class)->find($compte);

    // Récupérer les cartes associées à ce compte client spécifique
    $cartes = $carteRepository->findBy(['account' => $compte]);

    // Rendre la vue avec les informations sur les cartes et le compte client
    return $this->render('carte/indexfront.html.twig', [
        'compte' => $compte,
        'cartes' => $cartes,
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
}
