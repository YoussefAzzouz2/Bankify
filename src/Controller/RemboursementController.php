<?php

namespace App\Controller;

use App\Entity\Remboursement;
use App\Form\RemboursementType;
use App\Repository\RemboursementRepository;
use App\Repository\CreditRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/remboursement')]
class RemboursementController extends AbstractController
{
    #[Route('/credit/{id}', name: 'remboursement_index', methods: ['GET'])]
    public function index(RemboursementRepository $remboursementRepository,CreditRepository $creditRepository,$id): Response
    {
        $credit=$creditRepository->findById($id);
        if(2<1)
            return $this->render('remboursement/adminindex.html.twig', [
                'remboursements' => $remboursementRepository->findBy(['credit' => $credit[0]]),
            ]);
        else
        return $this->render('remboursement/clientindex.html.twig', [
            'remboursements' => $remboursementRepository->findBy(['credit' => $credit[0]]),
        ]);
    }

    #[Route('/new/credit/{id}', name: 'remboursement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,CreditRepository $creditRepository,$id): Response
    {
        $remboursement = new Remboursement();
        $form = $this->createForm(RemboursementType::class, $remboursement);
        $form->handleRequest($request);
        $credits=$creditRepository->findById($id);
        $credit=$credits[0];
        $remboursement->setCredit($credit);
        $interet = $credit->getInteret();
        $compte = $credit->getCompte();

        if ($form->isSubmitted() && $form->isValid()) {
            if($credit->getRemboursements()->isEmpty())
                $remboursement->setMontantRestant($credit->getMontantTotale() - $remboursement->getMontantR());
            else
                $remboursement->setMontantRestant($credit->getRemboursements()->last()->getMontantRestant() - $remboursement->getMontantR());
            $compte->setSolde($compte->getSolde() - $remboursement->getMontantR());
            $today = new \DateTime();
            $remboursement->setDateR($today);
            $date = $today->diff($credit->getDateC());
            $remboursement->setdureeRestante($credit->getDureeTotale() - $date->format('%m'));
            $remboursement->setDateR(new \DateTime());
            $montant = $form->get('montantR')->getData();

            if($montant>$compte->getSolde()){
                $this->addFlash('danger', 'Verifier votre solde.');
                return $this->redirectToRoute('remboursement_new', ['id' => $id]);
            }if($montant>$credit->getRemboursements()->last()->getMontantRestant()){
                $this->addFlash('danger', 'Le montant doit être inférieur au montant restant');
                return $this->redirectToRoute('remboursement_new', ['id' => $id]);
            }
            if($interet==10 && $montant<500){
                $this->addFlash('danger', 'Le montant doit être supérieur à 500.');
                return $this->redirectToRoute('remboursement_new', ['id' => $id]);
            }
            if($interet==15 && ($montant<300 || $montant>499)){
                $this->addFlash('danger', 'Le montant doit être compris entre 300 et 499.');
                return $this->redirectToRoute('remboursement_new', ['id' => $id]);
            }
            if($interet==20 && ($montant<100 || $montant>299)){
                $this->addFlash('danger', 'Le montant doit être compris entre 100 et 299.');
                return $this->redirectToRoute('remboursement_new', ['id' => $id]);
            }
            if($credit->getRemboursements()->last()->getMontantRestant()==0){
                $credit->setPayed(true);
                $this->addFlash('danger', 'Le crédit est payé.');
                return $this->redirectToRoute('remboursement_new', ['id' => $id]);
            }

            $entityManager->persist($remboursement);
            $entityManager->flush();

            return $this->redirectToRoute('remboursement_index', ['id' => $id], Response::HTTP_SEE_OTHER);
        }

        return $this->render('remboursement/new.html.twig', [
            'id'=>$id,
            'remboursement' => $remboursement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'remboursement_show', methods: ['GET'])]
    public function show(Remboursement $remboursement): Response
    {
        return $this->render('remboursement/show.html.twig', [
            'remboursement' => $remboursement,
        ]);
    }
}
