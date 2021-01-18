<?php

namespace App\Controller;

use App\Entity\Divorce;
use App\Form\DivorceType;
use App\Repository\DivorceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDivorceController extends AbstractController
{
    /**
     * @Route("/admin/divorces", name="admin_divorces_index")
     */
    public function index(DivorceRepository $repo): Response
    {
        $divorces = $repo->findAll();

        return $this->render('admin/divorce/index.html.twig', [
            'divorces' => $divorces
        ]);
    }

    /** Permet d'enregistrer une divorce dans le registre
     * @Route("/admin/divorces/new", name="admin_divorces_create")
     */
    public function create(Request $request, EntityManagerInterface $manager): Response
    {
        $divorce = new Divorce();

        $form = $this->createForm(DivorceType::class, $divorce);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $divorce->setDateEnregistrementDivorce(new \DateTime());

            $manager->persist($divorce);

            $manager->flush();

            $this->addFlash(
                'success',
                "Le divorce entre entre <strong> {$divorce->getmariage()->getPersonneEpoux()} et {$divorce->getmariage()->getPersonneEpouse()}</strong> a bien été enregistré !"
            );

            return $this->redirectToRoute('admin_divorces_index');
        }


        return $this->render('admin/divorce/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /** Permet d'editer un divorce dans le registre
     * @Route("/admin/divorces/edit/{id}", name="admin_divorces_edit")
     */
    public function edit(Divorce $divorce, Request $request, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(DivorceType::class, $divorce);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($divorce);

            $manager->flush();

            $this->addFlash(
                'success',
                "Les détails du divorce entre entre <strong> {$divorce->getmariage()->getPersonneEpoux()} et {$divorce->getmariage()->getPersonneEpouse()}</strong> ont bien été enregistrés !"
            );

            return $this->redirectToRoute('admin_divorces_index');
        }


        return $this->render('admin/divorce/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
