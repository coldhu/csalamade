<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index($name)
    {
        print 1;
        return $this->render('default/index.html.twig', [
            'name' => $name,
        ]);
    }
}