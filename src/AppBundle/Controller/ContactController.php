<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class ContactController extends SiteController
{
    /**
     *  This method gathers information and creates an array of variables
     *  to be used for information display.  It then passes those variables
     *  to the contact twig for display.
     *
     *  @return view The contact view of the site.
     */
    public function displayAction()
    {
        $renderArray = array_merge ($this->getUser(),
            array('bodyclass' => 'contact'));
        return $this->render('contact.html.twig', $renderArray);
    }
}
