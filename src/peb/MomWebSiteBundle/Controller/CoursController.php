<?php

namespace peb\MomWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CoursController extends Controller
{

    /**
     * @Route("/cours")
     * @Template()
     */
    public function coursAction()
    {
        return array();
    }
}
