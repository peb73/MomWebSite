<?php

namespace peb\MomWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GalerieController extends Controller
{

    /**
     * @Route("/galerie")
     * @Template()
     */
    public function galerieAction()
    {
        return array();
    }

}
