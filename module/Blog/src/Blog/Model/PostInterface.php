<?php
/**
 * Created by PhpStorm.
 * User: jovana.sabljic
 * Date: 11/18/2016
 * Time: 11:48 AM
 */

namespace Blog\Model;

interface PostInterface
{
	/**
	 * Will return the ID of the blog post
	 *
	 * @return int
	 */
	public function getId();

	/**
	 * Will return the TITLE of the blog post
	 *
	 * @return string
	 */
	public function getTitle();

	/**
	 * Will return the TEXT of the blog post
	 *
	 * @return string
	 */
	public function getText();
}