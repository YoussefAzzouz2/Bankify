<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/client', name: 'home_page')]
    public function index(): Response
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
    }

    #[Route('/admin', name: 'admin_page')]
    public function indexBack(): Response
    {
        return $this->render('home_page/admin.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
    }
}
