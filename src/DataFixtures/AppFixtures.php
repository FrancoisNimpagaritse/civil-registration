<?php

namespace App\DataFixtures;

use App\Entity\Colline;
use App\Entity\Commune;
use App\Entity\Personne;
use App\Entity\Province;
use App\Entity\Zone;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr-FR');
         //$provinces = ['Bubanza','Mairie','Bujumbura','Bururi','Cankuzo','Cibitoke','Gitega','Karuzi','Kayanza','Kirundo','Makamba','Muramvya','Muyinga','Mwaro','Ngozi','Rumonge','Rutana','Ruyigi'];
        //Nous gérons les provinces
        $provinces = [];

        for ($i = 1; $i <= 5; $i++) {
            $province = new Province();
            $province->setNom($faker->state)
                   ->setCode(mt_rand(0,5));
           $manager->persist($province);
           $provinces[] = $province;
        }
        //Ici nous gérons les communes
        $communes = [];

        for ($j = 1; $j <= 5; $j++) {
            $commune = new Commune();

            $prov = $provinces[mt_rand(0,4)];

            $commune->setNom($faker->city)
                    ->setCode(mt_rand(0,5))
                    ->setProvince($prov);

            $manager->persist($commune);
            $communes[] = $commune;
        }

        //Ici nous gérons les zones
        $zones = [];

        for ($k = 0; $k <= 4; $k++) {
            $zone = new Zone();

            $comm = $communes[mt_rand(0,4)];

            $zone->setNom($faker->city)
                ->setCommune($comm);

            $manager->persist($zone);
            $zones[] = $zone;
        }

        //Ici nous gérons les collines
        $collines = [];

        for ($l = 0; $l <= 5; $l++) {
            $colline = new Colline();

            $zon = $zones[mt_rand(0,3)];

            $colline->setNom($faker->streetName)
                    ->setZone($zon);

            $manager->persist($colline);
            $collines[] = $colline;
        }

        //on gère des personnes
        $personnes = [];
        for ($n = 1 ; $n <= 50; $n++) {
            $perso = new Personne();

            $col = $collines[mt_rand(0,5)];
            $zo = $zones[mt_rand(0,3)];
            $comn = $communes[mt_rand(0,4)];
            $prv = $provinces[mt_rand(0,4)];
            $genres = ['masculin', 'feminin'];

            $perso->setNom($faker->lastName)
                  ->setPrenom($faker->firstName)
                  ->setDateNaissance($faker->dateTimeBetween('-35 years','now'))
                  ->setCollineNaissance($col->getNom())
                  ->setZoneNaissance($zo->getNom())
                  ->setCommuneNaissance($comn->getNom())
                  ->setProvinceNaissance($prv->getNom())
                  ->setPaysNaissance("Burundi")
                  ->setStatusVital("en vie")
                  ->setSexe($genres[mt_rand(0,1)])
                  ->setCollineResidence($col->getNom())
                  ->setZoneResidence($zo->getNom())
                  ->setCommuneResidence($comn->getNom())
                  ->setProvinceResidence($prv->getNom())
                  ->setNationalite("Burundaise")
                  ->setPrefession("Cultivateur");
            $manager->persist($perso);
        }

        $manager->flush();
    }
}
