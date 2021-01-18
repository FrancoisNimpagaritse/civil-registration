<?php

namespace App\Controller;

use App\Entity\Mariage;
use App\Form\MariageType;
use App\Repository\MariageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminMariageController extends AbstractController
{
    /**
     * @Route("/admin/mariages", name="admin_mariages_index")
     */
    public function index(MariageRepository $repo): Response
    {
        $mariages = $repo->findAll();

        return $this->render('admin/mariage/index.html.twig', [
            'mariages' => $mariages
        ]);
    }

    /** Permet d'enregistrer un nouveau mariage
     * @Route("/admin/mariages/new", name="admin_mariages_create")
     */
    public function create(Request $request, EntityManagerInterface $manager): Response
    {
        $mariage = new Mariage();
        
        $form = $this->createForm(MariageType::class, $mariage);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($mariage);

            $manager->flush();

            $this->addFlash(
                'success',
                "Le mariage entre <strong> {$mariage->getPersonneEpoux()} et {$mariage->getPersonneEpouse()}</strong> a bien été enregistré !"
            );

            return $this->redirectToRoute('admin_mariages_index');
        }

        return $this->render('admin/mariage/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /** Permet d'éditer un mariage
     * @Route("/admin/mariages/edit/{id}", name="admin_mariages_edit")
     */
    public function edit(Mariage $mariage, Request $request, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(MariageType::class, $mariage);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($mariage);

            $manager->flush();

            $this->addFlash(
                'success',
                "Les détails du mariage entre <strong> {$mariage->getPersonneEpoux()} et {$mariage->getPersonneEpouse()}</strong> ont bien étés modifiés !"
            );

            return $this->redirectToRoute('admin_mariages_index');
        }

        return $this->render('admin/mariage/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
