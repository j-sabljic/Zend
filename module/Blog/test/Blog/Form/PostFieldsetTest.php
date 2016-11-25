<?php
/**
 * Created by PhpStorm.
 * User: jovana.sabljic
 * Date: 11/25/2016
 * Time: 2:03 PM
 */

namespace Blog\Form;

class PostFieldsetTest extends \PHPUnit_Framework_TestCase
{
	/** @var  Form $postForm */
	private $postFieldset;

	public function setUp()
	{
		parent::setUp();

		$this->postFieldset = new PostFieldset();
	}

	/**
	 * @test
	 */
	public function testFormAndInstance()
	{
		$this->assertInstanceOf('Zend\Form\Fieldset', $this->postFieldset);
		$this->assertInstanceOf('Blog\Form\PostFieldset', $this->postFieldset);
		$this->assertEquals(null, $this->postFieldset->getName());
	}


}
