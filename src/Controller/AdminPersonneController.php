<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Form\PersonneType;
use App\Repository\PersonneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class AdminPersonneController extends AbstractController
{
    /**
     * Permet d'affiche la listes des personnes du registre d'Etat Civil
     * 
     * @Route("/admin/personnes", name="admin_personnes_index")
     */
    public function index(PersonneRepository $repo): Response
    {
        $personnes = $repo->findAll();

        return $this->render('admin/personne/index.html.twig', [
            'personnes' => $personnes
        ]);
    }

    /**
     * Permet de créer une nouvelle personne du registre d'Etat Civil
     * 
     * @Route("/admin/personnes/new", name="admin_personnes_create")
     */
    public function create(Request $request, EntityManagerInterface $manager): Response
    {
        $personne = new Personne();

        $form = $this->createForm(PersonneType::class, $personne);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($personne);

            $manager->flush();

            $this->addFlash(
                'success',
                "La personne du nom de <strong> {$personne->getNom()} {$personne->getPrenom()}</strong> a bien été enregistré !"
            );

            return $this->redirectToRoute('admin_personnes_index');
        }

        return $this->render('admin/personne/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Permet d'éditer une personne du registre d'Etat Civil
     * 
     * @Route("/admin/personnes/edit/{id}", name="admin_personnes_edit")
     */
    public function edit(Personne $personne, Request $request, EntityManagerInterface $manager): Response
    {
       $form = $this->createForm(PersonneType::class, $personne);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($personne);

            $manager->flush();

            $this->addFlash(
                'success',
                "Les données de <strong> {$personne->getNom()} {$personne->getPrenom()}</strong> ont bien été modifiées !"
            );

            return $this->redirectToRoute('admin_personnes_index');
        }

        return $this->render('admin/personne/edit.html.twig', [
            'form' => $form->createView(),
            'personne' => $personne
        ]);
    }
}
