<?php

namespace peb\MomWebSiteBundle\Services;

use Doctrine\ORM\EntityManager;

/**
 * class ActualiteService
 */
class ActualiteService
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
	public function constructTwigData()
	{

        //actualites
        $actualiteRepository = $this->em
        	->getRepository('pebMomWebSiteBundle:Actualite');

        $actualites = $actualiteRepository->findAllOrdered();

        //result
        return array(
        	'actualites'=>$actualites
        );
	}
}