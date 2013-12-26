<?php

namespace peb\MomWebSiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use peb\MomWebSiteBundle\Entity\Description;
use peb\MomWebSiteBundle\Entity\Image;
use \DateTime;

class DescriptionData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $description = new Description();
        $description->setTitle('Lorem ipsum dolor sit amet');
        $description->setText('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.');
        //$description->setImagePath('imagePath description');

        $image = new Image();
        $image->setPath('test2.jpg');
        $image->setDate(new DateTime('NOW'));
        $image->setLocal(true);
        $image->setMimeType('image/jpg');

        $description->setImage($image);

        $manager->persist($image);
        $manager->persist($description);

        $manager->flush();
    }
}