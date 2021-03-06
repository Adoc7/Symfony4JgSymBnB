<?php

namespace App\Controller;

use App\Repository\AdRepository;
use App\Repository\UserRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller{
    /**
     * @Route("/hello/{prenom}/age/{age}", name="hello")
     * MULTIROUTAGE
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * @Route("/hello/{prenom}/{age}")

     * MONTRE LA PAGE QUI DIT BONJOUR
     *
     * @return void
     */
    public function hello($prenom="", $age=0){
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );   
    }

    
    /**
     * @Route("/", name="homepage")
     */
    public function home(AdRepository $adRepo, UserRepository $userRepo){
        
        return $this->render(
            'home.html.twig',
            [
                'ads'   => $adRepo->findBestAds(3),
                'users' => $userRepo->findBestUsers(2)
            ]
        );
     }
    }
?>