<?php
/**
 * Created by PhpStorm.
 * User: jovana.sabljic
 * Date: 11/21/2016
 * Time: 4:16 PM
 */
namespace Blog\Mapper;

use Blog\Model\PostInterface;

interface PostMapperInterface
{
	/**
	 * @param int|string $id
	 * @return PostInterface
	 * @throws \InvalidArgumentException
	 */
	public function find($id);

	/**
	 * @return array|PostInterface[]
	 */
	public function findAll();
}