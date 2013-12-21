<?php

namespace peb\MomWebSiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use peb\MomWebSiteBundle\Entity\Description;
use \DateTime;

class DescriptionData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $description = new Description();
        $description->setTitle('title description');
        $description->setText('text description');
        $description->setImagePath('imagePath description');

        $manager->persist($description);

        $manager->flush();
    }
}