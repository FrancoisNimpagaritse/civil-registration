<?php

namespace App\Controller;

use App\Entity\Deces;
use App\Form\DecesType;
use App\Repository\DecesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDecesController extends AbstractController
{
    /**
     * Permet d'afficher la liste des décès enregistrés
     * @Route("/admin/deces", name="admin_deces_index")
     */
    public function index(DecesRepository $repo): Response
    {
        $deces = $repo->findAll();

        return $this->render('admin/deces/index.html.twig', [
            'deces' => $deces
        ]);
    }

    /**
     * Permet d'afficher les détails d'une naissance pour l'imprimer
     * 
     * @Route("/admin/deces/show/{id}", name="admin_deces_show")
     */
    public function show(Deces $deces): Response
    {
        return $this->render('admin/deces/show_attestation.html.twig', [
            'deces' => $deces
        ]);
    }

    /**
     * Permet d'enregistrer un cas de décès dans le registre d'Etat Civil
     * @Route("/admin/deces/new", name="admin_deces_create")
     */
    public function create(Request $request, EntityManagerInterface $manager): Response
    {
        $deces = new Deces();

        $form = $this->createForm(DecesType::class, $deces);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            //dd($deces->getPersonne()->getNom());
            $deces->setDateEnregistrementDeces(new \DateTime());
            $manager->persist($deces);

            $manager->flush();

            $this->addFlash(
                'success',
                "Le décès de <strong>{$deces->getPersonne()->getNom()} {$deces->getPersonne()->getPrenom()}</strong> a bien été enregistré !"
            );

            return $this->redirectToRoute('admin_deces_index');
        }

        return $this->render('admin/deces/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * Permet d'éditer un cas de décès dans le registre d'Etat Civil
     * @Route("/admin/deces/edit/{id}", name="admin_deces_edit")
     */
    public function edit(Deces $deces, Request $request, EntityManagerInterface $manager): Response
    {
       $form = $this->createForm(DecesType::class, $deces);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            //dd($deces->getPersonne()->getNom());
            $deces->setDateEnregistrementDeces(new \DateTime());
            $manager->persist($deces);

            $manager->flush();

            $this->addFlash(
                'success',
                "Le détails du décès de <strong>{$deces->getPersonne()->getNom()} {$deces->getPersonne()->getPrenom()}</strong> ont bien été enregistrés !"
            );

            return $this->redirectToRoute('admin_deces_index');
        }

        return $this->render('admin/deces/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
