<?php

namespace App\Controller;

use App\Entity\Document;
use App\Form\DocumentType;
use App\Repository\DocumentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDocumentController extends AbstractController
{
    /**
     * @Route("/admin/documents", name="admin_documents_index")
     */
    public function index(DocumentRepository $repo): Response
    {
        $documents = $repo->findAll();

        return $this->render('admin/document/index.html.twig', [
            'documents' => $documents
        ]);
    }

    /** Permet de créer un documents d'état civil
     * @Route("/admin/documents/new", name="admin_documents_create")
     */
    public function create(Request $request, EntityManagerInterface $manager): Response
    {
        $document =  new Document();

        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($document);

            $manager->flush();

            $this->addFlash(
                'success',
                "Le document <strong> {$document->getType()}</strong> a bien été enregistré !"
            );

            return $this->redirectToRoute('admin_documents_index');
        }

        return $this->render('admin/document/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /** Permet de modifier un document délivré par l'état civil
     * @Route("/admin/documents/edit/{id}", name="admin_documents_edit")
     */
    public function edit(Document $document, Request $request, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($document);

            $manager->flush();

            $this->addFlash(
                'success',
                "Les modifications du document <strong> {$document->getType()}</strong> ont bien été enregistrées !"
            );

            return $this->redirectToRoute('admin_documents_index');
        }

        return $this->render('admin/document/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
