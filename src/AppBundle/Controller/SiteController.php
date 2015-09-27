<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class SiteController extends Controller
{

    public function indexAction()
    {
        return $this->render('home.html.twig', array('bodyclass' => 'homepage'));
    }
}
