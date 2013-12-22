<?php

namespace peb\MomWebSiteBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * class DescriptionRepository
 */
class DescriptionRepository extends EntityRepository
{

	/**
	 * @result Description
	 */
	public function findDescription(){
		
		$result = $this->getEntityManager()
            ->createQuery(
                'SELECT d FROM pebMomWebSiteBundle:Description d'
            )
            ->getOneOrNullResult();

        return $result;
	}

}