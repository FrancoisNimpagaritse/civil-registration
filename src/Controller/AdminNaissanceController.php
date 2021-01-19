<?php

namespace App\Controller;

use App\Entity\Naissance;
use App\Repository\NaissanceRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminNaissanceController extends AbstractController
{
    /**
     * @Route("/admin/naissances", name="admin_naissances_index")
     */
    public function index(NaissanceRepository $repo): Response
    {
        $naissances = $repo->findAll();
        return $this->render('admin/naissance/index.html.twig', [
            'naissances' => $naissances
        ]);
    }

    /**
     * Permet d'afficher les détails d'une naissance pour l'imprimer
     * 
     * @Route("/admin/naissances/show/{id}", name="admin_naissances_show")
     */
    public function show(Naissance $naissance): Response
    {
        return $this->render('admin/naissance/show_attestation.html.twig', [
            'naissance' => $naissance
        ]);
    }

    /**
     * Permet d'afficher les détails d'une naissance pour l'imprimer
     * 
     * @Route("/admin/naissances/print/{id}", name="admin_naissances_print")
     */
    public function print(Naissance $naissance): Response
    {
        return $this->render('admin/naissance/print-attestation.html.twig', [
            'naissance' => $naissance
        ]);
    }
}
