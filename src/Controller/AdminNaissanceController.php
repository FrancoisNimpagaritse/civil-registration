<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Entity\Naissance;
use App\Repository\NaissanceRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\NaissanceMereInexistantType;
use App\Form\NaissancePereInexistantType;
use App\Form\NaissanceEnfantInexistantType;
use Symfony\Component\HttpFoundation\Request;
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
     * Permet de faire une inscription du père et de l'enfant et les détails de sa naissance avec une mère déjà inscrite
     * @Route("/admin/naissance-pere-enfant/new", name="admin_naissance-pere-enfant_create")
     */
    public function createPereEnfantNaissance(Request $request, EntityManagerInterface $manager): Response
    {
        $personnePere = new Personne();
        $personneEnfant = new Personne();
        $objetNaissance = new Naissance();

        $form = $this->createForm(NaissancePereInexistantType::class,null);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();

            $personnePere->setNom($data['nomPere'])
                        ->setPrenom($data['prenomPere'])                        
                        ->setDateNaissance($data['dateNaissancePere'])
                        ->setCollineNaissance($data['collineNaissancePere'])
                        ->setZoneNaissance($data['zoneNaissancePere'])
                        ->setCommuneNaissance($data['communeNaissancePere'])
                        ->setProvinceNaissance($data['provinceNaissancePere'])
                        ->setPaysNaissance($data['paysNaissancePere'])
                        ->setStatusVital($data['statusVitalPere'])
                        ->setSexe($data['sexePere'])
                        ->setCollineResidence($data['collineResidencePere'])
                        ->setZoneResidence($data['zoneResidencePere'])
                        ->setCommuneResidence($data['communeResidencePere'])
                        ->setProvinceResidence($data['provinceResidencePere'])
                        ->setNationalite($data['nationalitePere'])
                        ->setProfession($data['professionPere'])
                        ->setPhoto($data['photoPere'])
                        ->setPin($data['pinPere'])
                    ;

            $personneEnfant->setNom($data['nomEnfant'])
                    ->setPrenom($data['prenomEnfant'])                        
                    ->setDateNaissance($data['dateNaissance'])
                    ->setCollineNaissance($data['collineNaissance'])
                    ->setZoneNaissance($data['zoneNaissance'])
                    ->setCommuneNaissance($data['communeNaissance'])
                    ->setProvinceNaissance($data['provinceNaissance'])
                    ->setPaysNaissance($data['paysNaissance'])
                    ->setStatusVital($data['statusVital'])
                    ->setSexe($data['sexe'])
                    ->setCollineResidence($data['personneMere']->getCollineResidence())
                    ->setZoneResidence($data['personneMere']->getZoneResidence())
                    ->setCommuneResidence($data['personneMere']->getCommuneResidence())
                    ->setProvinceResidence($data['personneMere']->getProvinceResidence())
                    ->setNationalite($data['nationalitePere'])
                    ->setProfession("")
                    ->setPere($personnePere)
            ;
            
            $objetNaissance->setDateNaissance($data['dateNaissance'])
                           ->setLieuNaissance($data['lieuNaissance'])
                           ->setCollineNaissance($data['collineNaissance'])
                           ->setZoneNaissance($data['zoneNaissance'])
                           ->setCommuneNaissance($data['communeNaissance'])
                           ->setProvinceNaissance($data['provinceNaissance'])
                           ->setPaysNaissance($data['paysNaissance'])
                           ->setDateInscription(new \DateTime())
                           ->setProfessionPere($data['professionPere'])
                           ->setProfessionMere($data['personneMere']->getProfession())
                           ->setAdressePere($data['collineResidencePere'])
                           ->setAdresseMere($data['personneMere']->getCollineResidence())
                           ->setNumeroActeNaissance($data['numeroActeNaissance'])
                            ->setNumeroVolume($data['numeroVolume'])
                            ->setNomCompletTemoinUn($data['nomCompletTemoinUn'])
                            ->setAdresseTemoinUn($data['adresseTemoinUn'])
                            ->setProfessionTemoinUn($data['professionTemoinUn'])
                            ->setNomCompletTemoinDeux($data['nomCompletTemoinDeux'])
                            ->setAdresseTemoinDeux($data['adresseTemoinDeux'])
                            ->setProfessionTemoinDeux($data['professionTemoinDeux'])
                            ->setPersonne($personneEnfant)
                        ;
            
            $manager->persist($personnePere);
            $manager->persist($personneEnfant);
            $manager->persist($objetNaissance);

            $manager->flush();

            $this->addFlash(
                'success',
                "L'inscription de la naissance de <strong>{$personneEnfant->getNom()} {$personneEnfant->getPrenom()}</strong> a bien été enregistrée !"
            );

            return $this->redirectToRoute('admin_naissances_index');
        }

        return $this->render('admin/naissance/new_pere_enfant.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Permet de faire une inscription d'une mère et de l'enfant et les détails de sa naissance avec un père déjà inscrit
     * @Route("/admin/naissance-mere-enfant/new", name="admin_naissance-mere-enfant_create")
     */
    public function createMereEnfantNaissance(Request $request, EntityManagerInterface $manager): Response
    {
        $personneMere = new Personne();
        $personneEnfant = new Personne();
        $objetNaissance = new Naissance();

        $form = $this->createForm(NaissanceMereInexistantType::class,null);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();

            $personneMere->setNom($data['nomMere'])
                    ->setPrenom($data['prenomMere'])                        
                    ->setDateNaissance($data['dateNaissanceMere'])
                    ->setCollineNaissance($data['collineNaissanceMere'])
                    ->setZoneNaissance($data['zoneNaissanceMere'])
                    ->setCommuneNaissance($data['communeNaissanceMere'])
                    ->setProvinceNaissance($data['provinceNaissanceMere'])
                    ->setPaysNaissance($data['paysNaissanceMere'])
                    ->setStatusVital($data['statusVitalMere'])
                    ->setSexe($data['sexeMere'])
                    ->setCollineResidence($data['collineResidenceMere'])
                    ->setZoneResidence($data['zoneResidenceMere'])
                    ->setCommuneResidence($data['communeResidenceMere'])
                    ->setProvinceResidence($data['provinceResidenceMere'])
                    ->setNationalite($data['nationaliteMere'])
                    ->setProfession($data['professionMere'])
                    ->setPhoto($data['photoMere'])
                    ->setPin($data['pinMere'])
                ;

            $personneEnfant->setNom($data['nomEnfant'])
                    ->setPrenom($data['prenomEnfant'])                        
                    ->setDateNaissance($data['dateNaissance'])
                    ->setCollineNaissance($data['collineNaissance'])
                    ->setZoneNaissance($data['zoneNaissance'])
                    ->setCommuneNaissance($data['communeNaissance'])
                    ->setProvinceNaissance($data['provinceNaissance'])
                    ->setPaysNaissance($data['paysNaissance'])
                    ->setStatusVital($data['statusVital'])
                    ->setSexe($data['sexe'])
                    ->setCollineResidence($data['collineResidenceMere'])
                    ->setZoneResidence($data['zoneResidenceMere'])
                    ->setCommuneResidence($data['communeResidenceMere'])
                    ->setProvinceResidence($data['provinceResidenceMere'])
                    ->setNationalite($data['nationaliteMere'])
                    ->setPere($data['personnePere'])
                    ->setMere($personneMere)
            ;
            
            $objetNaissance->setDateNaissance($data['dateNaissance'])
                           ->setLieuNaissance($data['lieuNaissance'])
                           ->setCollineNaissance($data['collineNaissance'])
                           ->setZoneNaissance($data['zoneNaissance'])
                           ->setCommuneNaissance($data['communeNaissance'])
                           ->setProvinceNaissance($data['provinceNaissance'])
                           ->setPaysNaissance($data['paysNaissance'])
                           ->setDateInscription(new \DateTime())
                           ->setProfessionPere($data['personnePere']->getProfession())
                           ->setProfessionMere($data['professionMere'])
                           ->setAdressePere($data['personnePere']->getCollineResidence())
                           ->setAdresseMere($data['collineResidenceMere'])
                           ->setNumeroActeNaissance($data['numeroActeNaissance'])
                            ->setNumeroVolume($data['numeroVolume'])
                            ->setNomCompletTemoinUn($data['nomCompletTemoinUn'])
                            ->setAdresseTemoinUn($data['adresseTemoinUn'])
                            ->setProfessionTemoinUn($data['professionTemoinUn'])
                            ->setNomCompletTemoinDeux($data['nomCompletTemoinDeux'])
                            ->setAdresseTemoinDeux($data['adresseTemoinDeux'])
                            ->setProfessionTemoinDeux($data['professionTemoinDeux'])
                            ->setPersonne($personneEnfant)
                            
                        ;
            
            $manager->persist($personneMere);
            $manager->persist($personneEnfant);
            $manager->persist($objetNaissance);

            $manager->flush();

            $this->addFlash(
                'success',
                "L'inscription de la naissance de <strong>{$personneEnfant->getNom()} {$personneEnfant->getPrenom()}</strong> a bien été enregistrée !"
            );

            return $this->redirectToRoute('admin_naissances_index');
        }

        return $this->render('admin/naissance/new_mere_enfant.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Permet de faire une inscription de l'enfant et les détails de sa naissance avec un père et une mère déjà inscrits
     * @Route("/admin/naissance-enfant/new", name="admin_naissance-enfant_create")
     */
    public function createEnfantNaissance(Request $request, EntityManagerInterface $manager): Response
    {
        $personneEnfant = new Personne();
        $objetNaissance = new Naissance();

        $form = $this->createForm(NaissanceEnfantInexistantType::class,null);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
            dd($data);
            $personneEnfant->setNom($data['nomEnfant'])
                    ->setPrenom($data['prenomEnfant'])                        
                    ->setDateNaissance($data['dateNaissance'])
                    ->setCollineNaissance($data['collineNaissance'])
                    ->setZoneNaissance($data['zoneNaissance'])
                    ->setCommuneNaissance($data['communeNaissance'])
                    ->setProvinceNaissance($data['provinceNaissance'])
                    ->setPaysNaissance($data['paysNaissance'])
                    ->setStatusVital($data['statusVital'])
                    ->setSexe($data['sexe'])
                    ->setCollineResidence($data['personneMere']->getCollineResidence())
                    ->setZoneResidence($data['personneMere']->getZoneResidence())
                    ->setCommuneResidence($data['personneMere']->getCommuneResidence())
                    ->setProvinceResidence($data['personneMere']->getProvinceResidence())
                    ->setNationalite($data['personneMere']->getNationalite())
                    ->setPere($data['personnePere'])
                    ->setMere($data['personneMere'])
            ;
            
            $objetNaissance->setDateNaissance($data['dateNaissance'])
                           ->setLieuNaissance($data['lieuNaissance'])
                           ->setCollineNaissance($data['collineNaissance'])
                           ->setZoneNaissance($data['zoneNaissance'])
                           ->setCommuneNaissance($data['communeNaissance'])
                           ->setProvinceNaissance($data['provinceNaissance'])
                           ->setPaysNaissance($data['paysNaissance'])
                           ->setDateInscription(new \DateTime())
                           ->setProfessionPere($data['personnePere']->getProfession())
                           ->setProfessionMere($data['personneMere']->getProfession())
                           ->setAdressePere($data['personnePere']->getCollineResidence())
                           ->setAdresseMere($data['personneMere']->getCollineResidence())
                           ->setNumeroActeNaissance($data['numeroActeNaissance'])
                            ->setNumeroVolume($data['numeroVolume'])
                            ->setNomCompletTemoinUn($data['nomCompletTemoinUn'])
                            ->setAdresseTemoinUn($data['adresseTemoinUn'])
                            ->setProfessionTemoinUn($data['professionTemoinUn'])
                            ->setNomCompletTemoinDeux($data['nomCompletTemoinDeux'])
                            ->setAdresseTemoinDeux($data['adresseTemoinDeux'])
                            ->setProfessionTemoinDeux($data['professionTemoinDeux'])
                            ->setPersonne($personneEnfant)
             //ikibazo      ->setNaissanceFichierCopieIntegrale($data['naissanceImageFile'])
                            
                        ;
                        dd($objetNaissance);
            $manager->persist($personneEnfant);
            $manager->persist($objetNaissance);

            $manager->flush();

            $this->addFlash(
                'success',
                "L'inscription de la naissance de <strong>{$personneEnfant->getNom()} {$personneEnfant->getPrenom()}</strong> a bien été enregistrée !"
            );

            return $this->redirectToRoute('admin_naissances_index');
        }

        return $this->render('admin/naissance/new_enfant.html.twig', [
            'form' => $form->createView(),
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
