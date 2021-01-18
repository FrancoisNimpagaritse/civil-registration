<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Entity\Naissance;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\NaissancePereMereInexistantType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminNaissancePereMereInexistantController extends AbstractController
{
    /**
     * Permet de faire une inscription des parents et de l'enfant et les détails de sa naissance
     * @Route("/admin/naissance-full/new", name="admin_naissance-full_create")
     */
    public function create(Request $request, EntityManagerInterface $manager): Response
    {
        $personnePere = new Personne();
        $personneMere = new Personne();
        $personneEnfant = new Personne();
        $objetNaissance = new Naissance();

        $form = $this->createForm(NaissancePereMereInexistantType::class,null);
        $form->handleRequest($request);
        $personnePere = new Personne();

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
                    ->setProfession("")
                    ->setPhoto($data['photoPere'])
                    ->setPin($data['pinPere'])
                    ->setPere($personnePere)
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
                           ->setProfessionPere($data['professionPere'])
                           ->setProfessionMere($data['professionMere'])
                           ->setAdressePere($data['collineResidencePere'])
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

            
            
            //dd($personneEnfant);
            
            $manager->persist($personnePere);
            $manager->persist($personneMere);
            $manager->persist($personneEnfant);
            $manager->persist($objetNaissance);

            $manager->flush();

            $this->addFlash(
                'success',
                "L'inscription de la naissance de <strong>{$personneEnfant->getNom()} {$personneEnfant->getPrenom()}</strong> a bien été enregistré !"
            );

            return $this->redirectToRoute('admin_personnes_index');
        }

        return $this->render('admin/naissance/new_pere_mere_enfant.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
