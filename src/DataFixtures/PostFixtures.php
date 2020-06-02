<?php
namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $post = new Post();
        $post->setTitle("un article")
            ->setContent("bla bla bla bla bla")
            ->setDateCreate(new \DateTime(''));

        $manager->persist($post);

        $manager->flush();
    }
}