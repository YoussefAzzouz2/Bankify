<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\CompteClient;
use App\Repository\CarteRepository;
use App\Entity\Carte;
use App\Form\CarteType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CompteClientRepository;


class CompteClientController extends AbstractController
{
    #[Route('/compte/client', name: 'app_compte_client')]
    public function index(): Response
    {
        return $this->render('compte_client/index.html.twig', [
            'controller_name' => 'CompteClientController',
        ]);
    }
    #[Route('/{id}/cartes', name: 'carte_index_for_compte', methods: ['GET'])]
    public function indexForCompte(CompteClient $compte, CarteRepository $carteRepository,CompteClientRepository $CompteClientRepository): Response
    {
    // Récupérer le compte client spécifique
    $compte = $CompteClientRepository->find($compte);

    // Récupérer les cartes associées à ce compte client spécifique
    $cartes = $carteRepository->findBy(['account' => $compte]);

    

    // Rendre la vue avec les informations sur les cartes et le compte client
    return $this->render('carte/indexfront.html.twig', [
        'compte' => $compte,
        'cartes' => $cartes,
    ]);

    }
}
