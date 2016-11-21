<?php

namespace Blog\Service;

use Blog\Model\Post;

interface PostServiceInterface
{
    public function findAllPosts();

    public function findPost($id);
}