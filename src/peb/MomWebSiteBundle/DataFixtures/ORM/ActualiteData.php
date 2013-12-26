<?php

namespace peb\MomWebSiteBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use peb\MomWebSiteBundle\Entity\Actualite;
use peb\MomWebSiteBundle\Entity\Image;
use \DateTime;

class ActualiteData implements FixtureInterface
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

        $title = 'Lorem ipsum dolor sit amet';
        $text= 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.';

        $actualite1 = new Actualite();
        $actualite1->setDate(new DateTime('NOW'));
        $actualite1->setTitle($title);
        $actualite1->setText($text);
        $actualite1->setImage($image0);
        //$actualite1->setImagePath('imagePath actualite 1');

        $actualite2 = new Actualite();
        $actualite2->setDate(new DateTime('NOW'));
        $actualite2->setTitle($title);
        $actualite2->setText($text);
        $actualite2->setImage($image1);
        //$actualite2->setImagePath('imagePath actualite 2');

        $actualite3 = new Actualite();
        $actualite3->setDate(new DateTime('NOW'));
        $actualite3->setTitle($title);
        $actualite3->setText($text);
        $actualite3->setImage($image2);
        //$actualite3->setImagePath('imagePath actualite 3');

        $actualite4 = new Actualite();
        $actualite4->setDate(new DateTime('NOW'));
        $actualite4->setTitle($title);
        $actualite4->setText($text);
        //$actualite4->setImagePath('imagePath actualite 4');

        $actualite5 = new Actualite();    
        $actualite5->setDate(new DateTime('NOW'));
        $actualite5->setTitle($title);
        $actualite5->setText($text);
        //$actualite5->setImagePath('imagePath actualite 5');

        $manager->persist($image0);
        $manager->persist($image1);
        $manager->persist($image2);

        $manager->persist($actualite1);
        $manager->persist($actualite2);
        $manager->persist($actualite3);
        $manager->persist($actualite4);
        $manager->persist($actualite5);

        $manager->flush();
    }
}