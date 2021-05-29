<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function home(): Response
    {
//        dd($this->getUser()->);

        $credentials = [
            'name' => $this->getUser()->getUsername(),
            'n' => "hello",
        ];


        return $this->render('home/home.html.twig',[
//            'name' => $this->getUser()->getName()
        'data'  => $credentials
        ]);

    }

}
