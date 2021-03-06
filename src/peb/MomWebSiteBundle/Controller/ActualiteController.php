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
        return $this->render('pebMomWebSiteBundle:Actualite:actualites.html.twig',$this->get('peb_mom_web_site.services.actualite_service')->constructTwigData());
    }

    /**
     * @Route("/actualite/{id}", requirements={"id"="\d+"})
     */
    public function actualiteDetailAction($id)
    {
        return $this->render('pebMomWebSiteBundle:Actualite:actualite.html.twig', $this->get('peb_mom_web_site.services.actualite_detail_service')->constructTwigData($id));
    }

}
