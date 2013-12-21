<?php

namespace peb\MomWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ImageController extends Controller
{

    /**
     * @Route("/image/{id}", requirements={"id" = "\d+"})
     */
    public function imageAction()
    {
    	//TODO
        return array();
    }

}
