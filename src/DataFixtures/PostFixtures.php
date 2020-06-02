<?php
namespace App\DataFixtures;

use App\Entity\Post;
use App\Repository\PostRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $post = new Post();
        $post->setTitle("NoPurge","ouais")
            ->setContent("Ca marche","oupas")
            ->setDateCreate(new \DateTime('now'),new \DateTime('now'))
            ->setImgSrc("https://www.assoedc.com/wp-content/uploads/2015/09/EDC-Victoire-EnR.jpg","https://i.ytimg.com/vi/m-ZmKrzRjeA/maxresdefault.jpg");

        $manager->persist($post);

        $manager->flush();
    }
}