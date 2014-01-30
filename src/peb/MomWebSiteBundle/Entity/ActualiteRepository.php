<?php

namespace peb\MomWebSiteBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * class ActualiteRepository
 */
class ActualiteRepository extends EntityRepository
{

	/**
	 * @result array
	 */
	public function findLastActualite($limit)
	{
		
		$result = $this->getEntityManager()
            ->createQuery(
                'SELECT a FROM pebMomWebSiteBundle:Actualite a ORDER BY a.date DESC'
            )
            ->setMaxResults($limit)
            ->getResult();

        return $result;
	}

	/**
	 * @result array
	 */
	public function findAllOrdered()
	{
		$result = $this->getEntityManager()
			->createQuery(
				'SELECT a FROM pebMomWebSiteBundle:Actualite a ORDER By a.date DESC'
			)
			->getResult();

		return $result;
	}

	/**
	 * @return null|Actualite
	 */
	public function findById($id)
	{
		$result = $this->getEntityManager()
			->createQuery(
				'SELECT a FROM pebMomWebSiteBundle:Actualite a where a.id = :id'
			)
			->setParameter('id',$id)
			->getOneOrNullResult();

		return $result;
	}
	
}