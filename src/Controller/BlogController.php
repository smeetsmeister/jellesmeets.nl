<?php

namespace App\Controller;

use App\Entity\Blog;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\BlogService;

class BlogController extends AbstractController
{
    /**
     * @param BlogService $blogService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction(BlogService $blogService)
    {
        dump($blogService->listBlogs());

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @param BlogService $blogService
     * @param string $slug
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(BlogService $blogService, string $title)
    {
        $blog = $blogService->getBlog($title);

        return $this->render('blog/blog.html.twig', [
            'blog' => $blog
        ]);
    }
}
