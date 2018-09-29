<?php

namespace App\Service;

use App\Entity\Blog;

class BlogService
{

    /**
     * BlogService constructor.
     */
    public function __construct()
    {
    }

    public function listBlogs()
    {
        return "list";
    }

    /**
     * @param string $title
     * @return Blog
     */
    public function getBlog(string $title)
    {
        $blog = new Blog();

        //Dummy data, replace with actual blog data.
        $blog->setId(1)
            ->setTitle($title)
            ->setBody("Blogging is awesome!")
            ->setDateTime(new \DateTimeImmutable());

        return $blog;
    }
}