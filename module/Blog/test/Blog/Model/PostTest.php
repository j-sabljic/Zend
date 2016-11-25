<?php
/**
 * Created by PhpStorm.
 * User: jovana.sabljic
 * Date: 11/23/2016
 * Time: 11:16 AM
 */

namespace Blog\Model;

class PostTest extends \PHPUnit_Framework_TestCase
{
	/** @var  Post */
	private $postModel;

	public function setUp()
	{
		parent::setUp();

		$this->postModel = new Post();
	}

	public function tearDown()
	{
		parent::tearDown();
	}

	/**
	 * @test
	 */
	public function testId()
	{
		$this->assertNull($this->postModel->getId());
		$this->postModel->setId(1);
		$this->assertEquals(1, $this->postModel->getId());
	}

	public function testTitle()
	{
		$this->assertNull($this->postModel->getTitle());
		$this->postModel->setTitle('Title');
		$this->assertEquals('Title', $this->postModel->getTitle());
	}

	public function testText()
	{
		$this->assertNull($this->postModel->getTitle());
		$this->postModel->setTitle('Text');
		$this->assertEquals('Text', $this->postModel->getTitle());
	}

	/**
	 * @test
	 */
	public function testDummy()
	{
		$this->assertTrue(true);
	}

	/**
	 * @return array
	 */
	public function invalidIds()
	{
		return array(
			array(null),
			array(new \stdClass()),
			array(true),
			array(array())
		);
	}
}