<?php

namespace App\Controller;
use App\Entity\CompteClient;
use App\Form\CompteClientType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\Color\Color;
use App\Repository\CompteClientRepository;
use Endroid\QrCode\Encoding\Encoding;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Endroid\QrCode\ErrorCorrectionLevel;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\JsonResponse;








class FrontcompteClientController extends AbstractController
{
    #[Route('/frontcompte/client', name: 'app_frontcompte_client')]
    public function index(CompteClientRepository $compteClientRepository): Response
    {
        $compteClients = $compteClientRepository->findAll();

        return $this->render('frontcompte_client/index.html.twig', [
            'compte_clients' => $compteClients,
            'controller_name' => 'FrontcompteClientController',
        ]);
    }
    #[Route('/new', name: 'app_frontcompte_client_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $compteClient = new CompteClient();
        $form = $this->createForm(CompteClientType::class, $compteClient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($compteClient);
            $entityManager->flush();

            return $this->redirectToRoute('app_frontcompte_client', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('frontcompte_client/new.html.twig', [
            'compte_client' => $compteClient,
            'form' => $form,
        ]);
    }
    #[Route('/show/{id}', name: 'app_frontcompte_client_show', methods: ['GET'])]
    public function generateQrCode(CompteClientRepository $rep,$id): Response
    {
        $infos = $rep->find($id);

    // Extract information from the Specification entity
    $content = [
        'nom' => $infos->getNom(),
        'prenom' => $infos->getPrenom(),
        'mail' => $infos->getMail(),
        'tel' => $infos->getTel(),
        'rib' => $infos->getRib(),
        'solde' => $infos->getSolde(),
    
        // Add more attributes as needed
    ];

    // Convert the array to a string
    $contentString = json_encode($content);

        $writer = new PngWriter();
        $qrCode = QrCode::create($contentString)
            ->setEncoding(new Encoding('UTF-8'))
           
            ->setSize(200)
            ->setMargin(0)
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        $qrCodeUri = $writer->write($qrCode)->getDataUri();

        return $this->render('qr_code_generator/index.html.twig', [
            'qrCodeUri' => $qrCodeUri,
           
        ]);
    }
    
    #[Route('/show/{id}/pdf', name: 'app_frontcompte_client_show_pdf', methods: ['GET'])]
    public function showPdf(CompteClient $compteClient): Response
    {
        // Generate PDF content with user information
        $pdfContent = $this->generatePdfContent($compteClient);
        
        // Create a DOMPDF instance
        $dompdf = new Dompdf();
        $dompdf->loadHtml($pdfContent);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        // Set response headers for PDF download
        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="compte_client.pdf"');
        
        return $response;
    }
    private function generatePdfContent(CompteClient $compteClient): string
    {
        // Generate PDF content with user information
        $content = '<html>';
        $content .= '<body>';
        $content .= '<h1>User Information</h1>';
        $content .= '<p>Name: ' . $compteClient->getNom() . '</p>';
        $content .= '<p>Prenom: ' . $compteClient->getPrenom() . '</p>';
        $content .= '<p>Tel: ' . $compteClient->getTel() . '</p>';
        $content .= '<p>Mail: ' . $compteClient->getMail() . '</p>';
        $content .= '<p>Rib: ' . $compteClient->getRib() . '</p>';
        $content .= '<p>Solde: ' . $compteClient->getSolde() . '</p>';
        // Include other user information fields as needed
        $content .= '</body>';
        $content .= '</html>';
        
        return $content;
    }

    

    
    

    #[Route('/{id}/edit', name: 'app_frontcompte_client_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CompteClient $compteClient, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CompteClientType::class, $compteClient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_frontcompte_client', [], Response::HTTP_SEE_OTHER);

        }

        return $this->renderForm('frontcompte_client/edit.html.twig', [
            'compte_client' => $compteClient,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_frontcompte_client_delete', methods: ['POST'])]
    public function delete(Request $request, CompteClient $compteClient, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$compteClient->getId(), $request->request->get('_token'))) {
            $entityManager->remove($compteClient);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_frontcompte_client', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/statistics', name: 'app_frontcompte_client_statistics', methods: ['GET'])]
    public function statistics(CompteClientRepository $compteClientRepository): Response
    {
        $compteClients = $compteClientRepository->findAll();
        $statistics = [
            'types' => [],
            'packs' => []
        ];
    
        foreach ($compteClients as $compteClient) {
            $type = $compteClient->getNomType()->getNomType();
            $pack = $compteClient->getNomPack()->getNomPack();
    
            if (!isset($statistics['types'][$type])) {
                $statistics['types'][$type] = 1;
            } else {
                $statistics['types'][$type]++;
            }
    
            if (!isset($statistics['packs'][$pack])) {
                $statistics['packs'][$pack] = 1;
            } else {
                $statistics['packs'][$pack]++;
            }
        }
    
        // Rendre la vue twig avec les données des statistiques
        return $this->render('frontcompte_client/statistics.html.twig', [
            'statistics' => $statistics // Passer les statistiques en tant qu'objet PHP
        ]);
    }
       
}