<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminNaissanceController extends AbstractController
{
    /**
     * @Route("/admin/naissance", name="admin_naissance")
     */
    public function index(): Response
    {
        return $this->render('admin_naissance/index.html.twig', [
            'controller_name' => 'AdminNaissanceController',
        ]);
    }
}
