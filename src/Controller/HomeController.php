<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * HomeController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Si l'utilisateur est login mais n'a pas validé son compte on le
     * renvoie sur la page de confirmation. Sinon on le laisse acceder a
     * l'accueil
     *
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        if($this->getUser() !== null){
            $user = $this->userRepository->findOneBy(['email' => $this->getUser()->getUsername()]);

            // Si l'utilisateur est connecté en ayant validé son compte
            if($user->isVerified() === true){
                return $this->render('home/index.html.twig');
            }
            // Si l'utilisateur est connecté sans avoir validé son compte
            return $this->render('registration/confirm.html.twig', [
                'username' => $user->getUsername()
            ]);
        }

        // Si l'utilisateur n'est pas connecté
        return $this->render('home/index.html.twig');
    }
}
