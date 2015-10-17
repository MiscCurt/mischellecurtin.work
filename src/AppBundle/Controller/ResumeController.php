<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\VarDumper\VarDumper;
use AppBundle\Entity\Software;
use AppBundle\Entity\Categories;

class ResumeController extends SiteController
{
    /**
     *  This method returns an array of headers for the resume page.
     *
     *  @return array an array of resume headers.
     */
    public function getResumeHeaders()
    {
        return array("TECH" => "TECHNICAL SKILLS",
            "PRO" => "PROFESSIONAL EXPERIENCE",
            "ED" => "EDUCATION");
    }

    public function getCategoryInformation()
    {
        return $this->getDoctrine()
            ->getRepository('AppBundle:Categories')
            ->findAll();
    }

    public function getSoftwareInformation()
    {
        return $this->getDoctrine()
            ->getRepository('AppBundle:Software')
            ->findAll();
    }

    public function getEmployerInformation()
    {
        return $this->getDoctrine()
            ->getRepository('AppBundle:Employers')
            ->findAll();
    }

    public function getResponsibilityInformation()
    {
        return $this->getDoctrine()
            ->getRepository('AppBundle:Responsibilities')
            ->findAll();
    }

    /**
     *  This method gathers information and creates an array of variables
     *  to be used for information display.  It then passes those variables
     *  to the resume twig for display.
     *
     *  @return view The resume view of the site.
     */
    public function displayAction()
    {
        $renderArray = array_merge ($this->getUser(),
            array('bodyclass' => 'resume'),
            $this->getResumeHeaders(),
            array('category' => $this->getCategoryInformation()),
            array('software' => $this->getSoftwareInformation()),
            array('employer' => $this->getEmployerInformation()),
            array('responsibility' => $this->getResponsibilityInformation())
        );
        // $categoryArray = array('category' => $this->getCategoryInformation());
// return VarDumper::dump($renderArray);
        return $this->render('resume.html.twig', $renderArray);
    }
}
