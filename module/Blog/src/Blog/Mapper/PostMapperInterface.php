<?php
/**
 * Created by PhpStorm.
 * User: jovana.sabljic
 * Date: 11/18/2016
 * Time: 3:07 PM
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