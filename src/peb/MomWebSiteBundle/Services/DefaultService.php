<?php

namespace peb\MomWebSiteBundle\Services;

use Doctrine\ORM\EntityManager;

/**
 * class DefaultService
 */
class DefaultService
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
		//description
		$descriptionRepository = $this->em
        	->getRepository('pebMomWebSiteBundle:Description');

        $description = $descriptionRepository->findDescription();

        //actualites
        $actualiteRepository = $this->em
        	->getRepository('pebMomWebSiteBundle:Actualite');

        $actualites = $actualiteRepository->findAll();

        //result
        return array(
        	'description'=>$description,
        	'actualites'=>$actualites
        );
	}
}