<?php

namespace peb\MomWebSiteBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * class DescriptionRepository
 */
class DescriptionRepository
{

	/**
	 * @result Description
	 */
	public function findDescription(){
		
		$result = $this->getEntityManager()
            ->createQuery(
                'SELECT d FROM pebMomWebSiteBundle:Description d LIMIT 1'
            )
            ->getResult();

        if(count($result)<0) return null;

        return $result[0];
	}

}