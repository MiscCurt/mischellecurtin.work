<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

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
            $this->getResumeHeaders());
        return $this->render('resume.html.twig', $renderArray);
    }
}
