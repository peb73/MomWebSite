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

	/**
	 * @var int
	 */
	private $nbActualite;

	public function __construct(EntityManager $em, $nbActualite)
	{
		$this->em = $em;
		$this->nbActualite = $nbActualite;
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
        //die(var_dump($description));
        //actualites
        $actualiteRepository = $this->em
        	->getRepository('pebMomWebSiteBundle:Actualite');

        $actualites = $actualiteRepository->findLastActualite($this->nbActualite);

        //result
        return array(
        	'description'=>$description,
        	'actualites'=>$actualites
        );
	}
}