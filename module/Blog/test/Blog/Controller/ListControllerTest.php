<?php

/**
 * Created by PhpStorm.
 * User: jovana.sabljic
 * Date: 11/25/2016
 * Time: 3:15 PM
 */
namespace Blog\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use Zend\Http\Request as HttpRequest;

/**
 * @property  controller
 */
class ListControllerTest extends AbstractHttpControllerTestCase
{
	public function setUp()
	{
		$this->setApplicationConfig(
			include '/../../../../../config/application.config.php'
		);
		parent::setUp();
	}

	public function testIndexActionCanBeAccessed()
	{
		$this->dispatch('/blog');
		$this->assertModuleName('Blog');
		$this->assertControllerName('Blog\Controller\List');
		$this->assertControllerClass('ListController');
		$this->assertActionName('index');
		$this->assertMatchedRouteName('blog');
		$this->assertTemplateName('blog/list/index');
		$this->assertResponseStatusCode(200);
	}

	public function testDetailActionCanBeAccessed()
	{
		$this->dispatch('/detail{$id}', HttpRequest::METHOD_GET, array());
		$this->assertModuleName('Blog');
		$this->assertControllerName('Blog\Controller\List');
		$this->assertControllerClass('ListController');
		$this->assertActionName('detail');
		$this->assertMatchedRouteName('blog');
		$this->assertTemplateName('blog/list/detail');
		$this->assertResponseStatusCode(200);
	}
}
