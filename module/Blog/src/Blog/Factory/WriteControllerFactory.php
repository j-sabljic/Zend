<?php
/**
 * Created by PhpStorm.
 * User: jovana.sabljic
 * Date: 11/22/2016
 * Time: 10:16 AM
 */
namespace Blog\Factory;

use Blog\Controller\WriteController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class WriteControllerFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$realServiceLocator = $serviceLocator->getServiceLocator();
		$postService        = $realServiceLocator->get('Blog\Service\PostServiceInterface');
		$postInsertForm     = $realServiceLocator->get('FormElementManager')->get('Blog\Form\PostForm');

		return new WriteController(
			$postService,
			$postInsertForm
		);
	}
}
