<?php

namespace peb\MomWebSiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use peb\MomWebSiteBundle\Entity\Tableau;
use peb\MomWebSiteBundle\Entity\Image;
use \DateTime;

class TableauData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $image0 = new Image();
        $image0->setPath('test0.jpg');
        $image0->setDate(new DateTime('NOW'));
        $image0->setLocal(true);
        $image0->setMimeType('image/jpg');

        $image1 = new Image();
        $image1->setPath('test1.jpg');
        $image1->setDate(new DateTime('NOW'));
        $image1->setLocal(true);
        $image1->setMimeType('image/jpg');

        $image2 = new Image();
        $image2->setPath('test2.jpg');
        $image2->setDate(new DateTime('NOW'));
        $image2->setLocal(true);
        $image2->setMimeType('image/jpg');

        $tableau1 = new Tableau();
        $tableau1->setComment('Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
        $tableau1->setImage($image0);

        $tableau2 = new Tableau();
        $tableau2->setComment('Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
        $tableau2->setImage($image1);

        $tableau3 = new Tableau();
        $tableau3->setComment('Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
        $tableau3->setImage($image2);

        $manager->persist($image0);
        $manager->persist($image1);
        $manager->persist($image2);

        $manager->persist($tableau1);
        $manager->persist($tableau2);
        $manager->persist($tableau3);

        $manager->flush();
    }
}