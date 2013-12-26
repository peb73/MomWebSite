<?php

namespace peb\MomWebSiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use peb\MomWebSiteBundle\Entity\Image;
use \DateTime;

class ImageData implements FixtureInterface
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

        $manager->persist($image0);
        $manager->persist($image1);
        $manager->persist($image2);

        $manager->flush();
    }
}