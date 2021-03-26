<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Divorce;
use App\Entity\Mariage;
use App\Entity\Adoption;
use App\Entity\Naissance;
use App\Repository\NaissanceRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ImpressionController extends AbstractController
{
    /**
     * @Route("/impression/acte-notoriete-naissance/{id}", name="impression_acte_notoriete_naissance")
     */
    public function generate1Pdf(Naissance $naissance)
    {
        $options = new Options();
        $options->set('defaultFont', 'Roboto');
    
        $dompdf = new Dompdf($options);
               
        $html = $this->renderView('impression/acte_notoriete_naissance.html.twig', [
            'naissance' => $naissance
        ]);
            
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("acte_notoriete_naissance.pdf", [
            "Attachment" => false
        ]);
    }

    /**
     * @Route("/impression/extrait-acte-naissance/{id}", name="impression_extrait_acte_naissance")
     */
    public function generate2Pdf(Naissance $naissance)
    {
        $options = new Options();
        $options->set('defaultFont', 'Roboto');
    
        $dompdf = new Dompdf($options);
               
        $html = $this->renderView('impression/extrait_acte_naissance.html.twig', [
            'naissance' => $naissance
        ]);
            
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("extrait_acte_naissance.pdf", [
            "Attachment" => false
        ]);
    }

    /**
     * @Route("/impression/extrait-acte-mariage/{id}", name="impression_extrait_acte_mariage")
     */
    public function generate3Pdf(Mariage $mariage)
    {
        $options = new Options();
        $options->set('defaultFont', 'Roboto');
    
        $dompdf = new Dompdf($options);
               
        $html = $this->renderView('impression/extrait_acte_mariage.html.twig', [
            'mariage' => $mariage
        ]);
            
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("extrait_acte_mariage.pdf", [
            "Attachment" => false
        ]);
    }


    /**
     * @Route("/impression/extrait-acte-deces/{id}", name="impression_extrait_acte_deces")
     */
    public function generate4Pdf(Naissance $naissance)
    {
        $options = new Options();
        $options->set('defaultFont', 'Roboto');
    
        $dompdf = new Dompdf($options);
               
        $html = $this->renderView('impression/extrait_acte_deces.html.twig', [
            'naissance' => $naissance
        ]);
            
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("extrait_acte_deces.pdf", [
            "Attachment" => false
        ]);
    }

    /**
     * @Route("/impression/extrait-acte-divorce/{id}", name="impression_extrait_acte_divorce")
     */
    public function generate5Pdf(Divorce $divorce)
    {
        $options = new Options();
        $options->set('defaultFont', 'Roboto');
    
        $dompdf = new Dompdf($options);
               
        $html = $this->renderView('impression/extrait_acte_divorce.html.twig', [
            'divorce' => $divorce
        ]);
            
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("extrait_acte_divorce.pdf", [
            "Attachment" => false
        ]);
    }

    /**
     * @Route("/impression/pv-banc-mariage/{id}", name="impression_pv_banc_mariage")
     */
    public function generate6Pdf(Naissance $naissance)
    {
        $options = new Options();
        $options->set('defaultFont', 'Roboto');
    
        $dompdf = new Dompdf($options);
               
        $html = $this->renderView('impression/pv_bancs_mariage.html.twig', [
            'naissance' => $naissance
        ]);
            
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("pv_bancs_mariage.pdf", [
            "Attachment" => false
        ]);
    }

    /**
     * @Route("/impression/extrait-acte-adoption/{id}", name="impression_extrait_acte_adoption")
     */
    public function generate7Pdf(Adoption $adoption)
    {
        $options = new Options();
        $options->set('defaultFont', 'Roboto');
    
        $dompdf = new Dompdf($options);
               
        $html = $this->renderView('impression/extrait_acte_adoption.html.twig', [
            'adoption' => $adoption
        ]);
            
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("extrait_acte_adoption.pdf", [
            "Attachment" => false
        ]);
    }
}
