<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Entity\DetailDemande;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDemandeController extends AbstractController
{
    /**
     * @Route("/admin/demandes", name="admin_demandes_index")
     */
    public function index(): Response
    {
        return $this->render('admin/demande/index.html.twig', [
            'controller_name' => 'AdminDemandeController',
        ]);
    }

    /** Permet d'enregistrer une demande de document et ses détails
     * @Route("/admin/demande/new", name="admin_demande_create")
     */
    public function create(Request $request, EntityManagerInterface $manager): Response
    {
        $demande = new Demande();        
        $detailDemande = new DetailDemande();

        $form = $this->createForm(DemandeType::class, $detailDemande);
        $form->handleRequest($request);

        $formDetail = $this->createForm(DetailDemandeType::class, $detailDemande);
        $formDetail->handleRequest($request);

        $montant = 0;
        $total = 0;
        $ligne = 0;

        $session = $request->getSession();
        if(!$session->has('demande')){
            $session->set('demande', []);
        }

        $TabDemande = $session->get('demande', []);
        
        if ($form->isSubmitted() || $formDetail->isSubmitted()) {
            $choice = $request->get('bt');
            
            if($choice == "Valider") {
                $entityManager = $this->getDoctrine()->getManager();
                $lig = sizeof($TabDemande);

               $demande->setFraisTotalDemande($total);

                $entityManager->persist($demande);
                $entityManager->flush();

                
                /* Fin enregistrement demande */
                
                /* Valider détails de la demande */
                for ($i = 1; $i <= $lig; $i++) {                    
                    $lineExpense = new DetailDemande();

                    $lineExpense->setDemande($demande)
                                ->setDocument($TabDemande[$i]->getDocument())
                                ->setFraisUnitaire($TabDemande[$i]->getFraisUnitaire())                                
                                ->setQuantite($TabDemande[$i]->getQuantite())
                                ->setLigne($i);

                    $entityManager->merge($lineExpense);
                    $entityManager->flush();                                
                    
                    $montant = $TabDemande[$i]->getUnitPrice() * $TabDemande[$i]->getQuantity();
                    $total = $total + $montant;
                }

                //Une mise à jour des totaux par rapport à ce qui a été calculée est faite
                $demande->setFraisTotalDemande($total);

                $entityManager->persist($demande);
                $entityManager->flush();

                $session->remove('expense');
                /* Fin enregistrement des détails de la dépense */
                $this->addFlash('success', 'Demande ajoutée avec succcès');

                return $this->redirectToRoute('admin_demande_create');

            } else if($choice == "Ajouter") {
                $montant = $detailDemande->getFraisUnitaire() * $detailDemande->getQuantite();
                $ligne = sizeof($TabDemande) + 1;
                $TabDemande[$ligne] = $detailDemande;
                $session->set('demande', $TabDemande);
            }
        }

        return $this->render('admin/demande/new.html.twig', [
            'demande' => $demande,
            'linesDemnd'    => $TabDemande,
            'form' => $form->createView(),
            'detailDemande' => $detailDemande,
            'formDetail' => $formDetail->createView(),
            'total'    => $total,
            'line'        => $ligne
        ]);
        return $this->render('admin/demande/new.html.twig', [
            'controller_name' => 'AdminDemandeController',
        ]);
    }
}
