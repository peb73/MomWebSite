<?php

namespace peb\MomWebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Response;

class ImageController extends Controller
{

    /**
     * @Route("/image/{id}", requirements={"id" = "\d+"})
     */
    public function imageAction($id)
    {

    	$image = $this->getDoctrine()
        ->getRepository('pebMomWebSiteBundle:Image')
        ->find($id);

        //500
        if($image == null || !$image->getLocal())
        {
        	return new Response('invalid file', 500);
        }

        $imagePath = $this->container->getParameter('image_path');
    	
    	$file =    readfile(sprintf("%s/%s",$imagePath, $image->getPath()));
    	$headers = array(
    	    'Content-Type'     => 'image/jpg',
    	    'Content-Disposition' => 'inline; filename="test2.jpg"');
    	
    	return new Response($file, 200, $headers);
    }

}
