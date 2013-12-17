<?php

namespace peb\MomWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ActualiteController extends Controller
{

    /**
     * @Route("/actualite")
     * @Template()
     */
    public function actualiteAction()
    {
        return array();
    }

}
