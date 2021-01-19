<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AccountController extends AbstractController
{
    /**
     * Permet d'afficher la liste des utilisateurs enregistrés
     * @Route("/accounts", name="accounts_index")
     */
    public function index(UserRepository $repo): Response
    {
        $users = $repo->findAll();

        return $this->render('account/index.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * Permet d'afficher et de gérer le formulaire de connexion
     * 
     * @Route("/login", name="account_login")
     */
    public function login(AuthenticationUtils $utils): Response
    {
        $error = $utils->getLastAuthenticationError();
        $username = $utils->getLastUsername();

        return $this->render('account/login.html.twig', [
            'hasError' => $error !== null,
            'username' => $username
        ]);
    }

    /**
     * Permet de se déconnecter
     * 
     * @Route("/logout", name="account_logout")
     * 
     * @return void
     */
    public function logout()
    {
        
    }

    /**
     * Permet de créer un utilisateur
     * 
     * @Route("/accounts/register", name="accounts_register")
     *
     * @return Response
     */
    public function register(Request $request, EntityManagerInterface $manager)
    {
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            //$divorce->setDateEnregistrementDivorce(new \DateTime());

            $manager->persist($user);

            $manager->flush();

            $this->addFlash(
                'success',
                "L'utilisateur <strong> {$user->getNom()} et {$user->getPrenom()}</strong> a bien été enregistré !"
            );

            return $this->redirectToRoute('accounts_index');
        }
        return $this->render('account/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }
}