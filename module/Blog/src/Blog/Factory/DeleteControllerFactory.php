<?php
/**
 * Created by PhpStorm.
 * User: jovana.sabljic
 * Date: 11/22/2016
 * Time: 3:00 PM
 */
namespace Blog\Factory;

use Blog\Controller\DeleteController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class DeleteControllerFactory implements FactoryInterface
{
	/**
	 * Create service
	 *
	 * @param ServiceLocatorInterface $serviceLocator
	 *
	 * @return mixed
	 */
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$realServiceLocator = $serviceLocator->getServiceLocator();
		$postService        = $realServiceLocator->get('Blog\Service\PostServiceInterface');

		return new DeleteController($postService);
	}
}