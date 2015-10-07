<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Software;

class SiteController extends Controller
{
    /**
     *  This method returns an array of user information.
     *  TODO: Revise to pull information from SQL database.
     *
     *  @return array an array of user information.
     */
    public function getUser()
    {
        return array(
            "first_name" => "Mischelle",
            "last_name" => "Curtin",
            "address" => "3540 River Trace Drive, Johns Creek, GA 30022",
            "phone" => "678-467-5858",
            "email" => "mischellecurtin@gmail.com"
        );
    }

    /**
     *  This method gathers information and creates an array of variables
     *  to be used for information display.  It then passes those variables
     *  to the base twig to set up the site information shared by all pages.
     *
     *  @return view The base view that forms the site.
     */
    public function indexAction()
    {
        $renderArray = array_merge ($this->getUser(),
            array('bodyclass' => ''));
        return $this->render('base.html.twig', $renderArray);
    }
}
