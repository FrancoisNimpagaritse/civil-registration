<?php

namespace App\Controller;

use App\Repository\DocumentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class AdminCartController extends AbstractController
{
    /**
     * @Route("/admin/cart/show", name="admin_cart_show")
     */
    public function show(SessionInterface $session, DocumentRepository $repo): Response
    {
        // [1 => ['document' => 'Nom', 'quantite'=> 'qte', ..]]
        $detailedCart = [];
        $total = 0;

        foreach($session->get('cart', []) as $id => $qty) {
            $document = $repo->find($id);
            $detailedCart[] = [
                'document' => $document,
                'qty' => $qty
            ];
            $total += ($document->getFraisUnitaire() * $qty);
        }
        
        return $this->render('admin/cart/index.html.twig', [
            'items' => $detailedCart,
            'total' => $total
        ]);
    }
}
