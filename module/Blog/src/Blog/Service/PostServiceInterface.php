<?php
namespace Blog\Service;

use Blog\Model\PostInterface;

interface PostServiceInterface
{
	public function findAllPosts();

	public function findPost($id);

	public function savePost(PostInterface $blog);

	public function deletePost(PostInterface $blog);
}
