<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends SiteController
{
    /**
     *  This method gathers information and creates an array of variables
     *  to be used for information display.  It then passes those variables
     *  to the home twig to set up the site information provided on the
     *  home page.
     *
     *  @return view The home page view of the site.
     */
    public function indexAction()
    {
        $pageVariables = array_merge(array('bodyclass' => 'homepage'),
            $this->getUser());
        return $this->render('home.html.twig', $pageVariables);
    }
}
