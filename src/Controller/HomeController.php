<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function home()
    {
        $noms = ["Anil" => "Thatcher", "Matt"=> "Twitch", "Garek"=> "Nomad", "Pippo"=>"Fuze", "Jakin"=>"Capitao"];

        return $this->render('home/index.html.twig', [
            'pseudo' => 'Anil',
            'agent' => "Thatcher",
            'tableau' => $noms,
        ]);
    }
}
