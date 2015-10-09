<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Software;

class SoftwareController extends SiteController
{
    /**
     *  This method gathers information and creates an array of variables
     *  to be used for information display.  It then passes those variables
     *  to the base twig to set up the site information shared by all pages.
     *
     *  @return view The base view that forms the site.
     */
    public function addSoftwareInformation()
    {
        $software = new Software();
        $software->setName("Test");
        $software->setVersion("1.00");

        $dbInteraction = $this->getDoctrine()->getManager();

        $dbInteraction->persist($software);
        $dbInteraction->flush();

        return $software->getId();
    }

    public function getSoftwareInformation()
    {
        $software = $this->getDoctrine()
            ->getRepository('AppBundle:Software')
            ->findAll();

        return $software;
    }

    /**
     *  This method gathers information and creates an array of variables
     *  to be used for information display.  It then passes those variables
     *  to the base twig to set up the site information shared by all pages.
     *
     *  @return view The base view that forms the site.
     */
    public function displayAction()
    {
        //$softwareId = $this->addSoftwareInformation();
        $softwareIds = $this->getSoftwareInformation();
return new Response(dump($softwareIds));
        //return $this->render('software.html.twig', $renderArray);
    }
}
