<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/admin/dashboard", name="admin_dashboard")
     */
    public function index(EntityManagerInterface $manager): Response
    {
        $personnes = $manager->createQuery('SELECT COUNT(p) FROM App\Entity\Personne p')->getSingleScalarResult();
        $naissances = $manager->createQuery('SELECT COUNT(n) FROM App\Entity\Naissance n')->getSingleScalarResult();
        $mariages = $manager->createQuery('SELECT COUNT(m) FROM App\Entity\Mariage m')->getSingleScalarResult();
        $divorces = $manager->createQuery('SELECT COUNT(dv) FROM App\Entity\Divorce dv')->getSingleScalarResult();
        $deces = $manager->createQuery('SELECT COUNT(dc) FROM App\Entity\Deces dc')->getSingleScalarResult();
        $documents = $manager->createQuery('SELECT COUNT(doc) FROM App\Entity\Personne doc')->getSingleScalarResult();
        $users = $manager->createQuery('SELECT COUNT(u) FROM App\Entity\Personne u')->getSingleScalarResult();
        
        $performancesProvince = $manager->createQuery(
            'SELECT COUNT(n.id) as nbrNaissances, n.provinceNaissance
            FROM App\Entity\Naissance n
            GROUP BY n.provinceNaissance
            ORDER BY COUNT(n.id) '
            )->setMaxResults(5)
             ->getResult();
        

        return $this->render('admin/dashboard/index.html.twig', [
            'stats' => compact('personnes','naissances','mariages','divorces','deces', 'documents','users', 'performancesProvince')
            ]);
    }
}
