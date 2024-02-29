<?php

namespace App\Controller;

use App\Entity\Credit;
use App\Form\CreditType;
use App\Repository\CompteRepository;
use App\Repository\CreditRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CategorieCreditRepository;
use Dompdf\Dompdf;

#[Route('/credit')]
class CreditController extends AbstractController
{
    #[Route('/client', name: 'credit_home')]
    public function home(CreditRepository $creditRepository,CompteRepository $compteRepository): Response
    {
        $comptes = $compteRepository->findById(1);//apres integration la commande devient $this->security->getUser()->getCompte();
        $compte = $comptes[0];
        $credits=$creditRepository->findBy(['compte' => $compte]);
        if ($credits!=null){
            $credit=$credits[0];
            $id=$credit->getId();
        } else $id=508;
        return $this->render('credit/home.html.twig',['id' => $id]);
    }

    #[Route('/admin', name: 'credit_admin')]
    public function admin(): Response
    {
        return $this->render('credit/home.html.twig');
    }

    #[Route('/', name: 'credit_index')]
    public function index(): Response
    {
        return $this->render('credit/index.html.twig');
    }

    #[Route('/accepted', name: 'credit_accepted', methods: ['GET'])]
    public function accepted(CreditRepository $creditRepository): Response
    {
        return $this->render('credit/accepted.html.twig', [
            'credits' => $creditRepository->findBy(['accepted' => true,'payed' => false]),
        ]);
    }

    #[Route('/demandes', name: 'credits_demandes', methods: ['GET'])]
    public function demandes(CreditRepository $creditRepository): Response
    {
        return $this->render('credit/demandes.html.twig', [
            'credits' => $creditRepository->findBy(['accepted' => false,'payed' => false]),
        ]);
    }

    #[Route('/payes', name: 'credits_payes', methods: ['GET'])]
    public function payes(CreditRepository $creditRepository): Response
    {
        return $this->render('credit/payes.html.twig', [
            'credits' => $creditRepository->findBy(['accepted' => true,'payed' => true]),
        ]);
    }

    #[Route('/new', name: 'credit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,CategorieCreditRepository $categorieCreditRepository,CompteRepository $compteRepository,CreditRepository $creditRepository): Response
    {
        $credit = new Credit();
        $categories = $categorieCreditRepository->findAll();
        $form = $this->createForm(CreditType::class, $credit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $credit->setAccepted(false);
            $credit->setPayed(false);
            $credit->setDateC(new \DateTime());
            $montant = $credit->getMontantTotale() + ($credit->getMontantTotale() * ($credit->getInteret() / 100));
            $credit->setMontantTotale($montant);
            $comptes = $compteRepository->findById(1);//apres integration la commande devient $this->security->getUser()->getCompte();
            $compte = $comptes[0];
            $credit->setCompte($compte);
            $interet = $form->get('interet')->getData();
            if($interet==10)
                $credit->setDureeTotale(36);
            if($interet==15)
                $credit->setDureeTotale(48);
            if($interet==20)
                $credit->setDureeTotale(60);
            if(count($creditRepository->findBy(['compte'=>$compte]))>0){
                $this->addFlash('danger', 'Ce compte a déjà un crédit');
                return $this->redirectToRoute('credit_new');
            }
            $entityManager->persist($credit);
            $entityManager->flush();

            return $this->redirectToRoute('client_show', ['id' => $credit->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('credit/new.html.twig', [
            'credit' => $credit,
            'form' => $form,
            'categories' => $categories,
        ]);
    }

    #[Route('/{id}/client', name: 'client_show', methods: ['GET'])]
    public function clientShow(Credit $credit): Response
    {
        return $this->render('credit/clientshow.html.twig', [
            'credit' => $credit,
        ]);
    }

    #[Route('/{id}/admin', name: 'admin_show', methods: ['GET'])]
    public function show(Credit $credit): Response
    {
            return $this->render('credit/adminshow.html.twig', [
                'credit' => $credit,
            ]);
    }

    #[Route('/{id}/accept', name: 'acredit_accept', methods: ['GET', 'POST'])]
    public function accept($id,creditRepository $creditRepository, EntityManagerInterface $entityManager): Response
    {
        $credits=$creditRepository->findById($id);
        $credit=$credits[0];
        $credit->setAccepted(true);
        $entityManager->flush();
        return $this->redirectToRoute('credit_accepted', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/delete', name: 'credit_delete', methods: ['GET', 'POST'])]
    public function delete($id,creditRepository $creditRepository, EntityManagerInterface $entityManager): Response
    {
        $credits=$creditRepository->findById($id);
        $credit=$credits[0];
        $accepted=$credit->isAccepted();
        $payed=$credit->isPayed();
        $entityManager->remove($credit);
        $entityManager->flush();
        if($accepted==false && $payed==false)
            return $this->redirectToRoute('credits_demandes', [], Response::HTTP_SEE_OTHER);
        else
            return $this->redirectToRoute('credits_payes', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/pdf/{id}', name: 'credit_pdf', methods: ['GET'])]
    public function generatePdf(CreditRepository $creditRepository,$id): Response
    {
    $credits = $creditRepository->findById($id);
    $credit=$credits[0];

    $html = $this->renderView('credit/credit_pdf.html.twig', [
        'credit' => $credit,
    ]);

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $pdfContent = $dompdf->output();
    return new Response($pdfContent, Response::HTTP_OK, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="credit.pdf"',
    ]);}
}
