<?php

namespace peb\MomWebSiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use peb\MomWebSiteBundle\Entity\Actualite;
use \DateTime;

class ActualiteData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $actualite1 = new Actualite();
        $actualite1->setDate(new DateTime('NOW'));
        $actualite1->setTitle('title actualite 1');
        $actualite1->setText('text actualite 1');
        $actualite1->setImagePath('imagePath actualite 1');

        $actualite2 = new Actualite();
        $actualite2->setDate(new DateTime('NOW'));
        $actualite2->setTitle('title actualite 1');
        $actualite2->setText('text actualite 1');
        $actualite2->setImagePath('imagePath actualite 1');

        $actualite3 = new Actualite();
        $actualite3->setDate(new DateTime('NOW'));
        $actualite3->setTitle('title actualite 1');
        $actualite3->setText('text actualite 1');
        $actualite3->setImagePath('imagePath actualite 1');

        $actualite4 = new Actualite();
        $actualite4->setDate(new DateTime('NOW'));
        $actualite4->setTitle('title actualite 1');
        $actualite4->setText('text actualite 1');
        $actualite4->setImagePath('imagePath actualite 1');

        $actualite5 = new Actualite();    
        $actualite5->setDate(new DateTime('NOW'));
        $actualite5->setTitle('title actualite 1');
        $actualite5->setText('text actualite 1');
        $actualite5->setImagePath('imagePath actualite 1');

        $manager->persist($actualite1);
        $manager->persist($actualite2);
        $manager->persist($actualite3);
        $manager->persist($actualite4);
        $manager->persist($actualite5);

        $manager->flush();
    }
}