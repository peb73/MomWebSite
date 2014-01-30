<?php

namespace peb\MomWebSiteBundle\Services;

use Doctrine\ORM\EntityManager;

/**
 * class ActualiteService
 */
class ActualiteDetailService
{


	/**
	 * @var EntityManager
	 */
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	/**
	 * @return array
	 */
	public function constructTwigData($id)
	{

        //actualites
        $actualiteRepository = $this->em
        	->getRepository('pebMomWebSiteBundle:Actualite');

        $actualite = $actualiteRepository->findById($id);

        //result
        return array(
        	'actualite'=>$actualite
        );
	}
}