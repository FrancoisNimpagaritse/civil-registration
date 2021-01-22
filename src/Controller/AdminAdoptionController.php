<?php

namespace App\Controller;

use App\Entity\Adoption;
use App\Form\AdoptionType;
use App\Repository\AdoptionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminAdoptionController extends AbstractController
{
    /**
     * Permet d'afficher les adoptions inscrites
     * @Route("/admin/adoptions", name="admin_adoptions_index")
     */
    public function index(AdoptionRepository $repo): Response
    {
        return $this->render('admin/adoption/index.html.twig', [
            'adoptions' => $repo->findAll()
        ]);
    }

    /**
     * Permet d'ajouter une inscription d'adoption
     * @Route("/admin/adoptions/new", name="admin_adoptions_create")
     */
    public function create(Request $request, EntityManagerInterface $manager): Response
    {
        $adoption = new Adoption();

        $form = $this->createForm(AdoptionType::class, $adoption);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $adoption->setDateEnregistrement(new \DateTime());

            $manager->persist($adoption);

            $manager->flush();

            $this->addFlash(
                'success',
                "L'adoption pour l'enfant <strong> {$adoption->getEnfantAdopte()->getNom()} {$adoption->getEnfantAdopte()->getPrenom()}</strong> a bien été enregistré !"
            );

            return $this->redirectToRoute('admin_adoptions_index');
        }

        return $this->render('admin/adoption/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
