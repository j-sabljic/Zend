<?php
/**
 * Created by PhpStorm.
 * User: jovana.sabljic
 * Date: 11/24/2016
 * Time: 11:51 AM
 */

namespace Blog\Form;

use Zend\Form\Form;
use Zend\Form\Element\Button;

class PostFormTest extends \PHPUnit_Framework_TestCase
{

	/** @var  PostForm $postForm */
	private $postForm;

	public function setUp()
	{
		parent::setUp();

		$this->postForm = new PostForm();
	}

	/**
	 * @test
	 */
	public function testFormAndInstance()
	{
		$this->assertInstanceOf('Zend\Form\Form', $this->postForm);
		$this->assertInstanceOf('Blog\Form\PostForm', $this->postForm);
		$this->assertEquals(null, $this->postForm->getName());
	}

	/**
	 * @test
	 */
	public function testPostFieldset()
	{
		$expected = new PostFieldset();
		$expected->setName('post-fieldset');
		$expected->setOptions([
			'use_as_base_fieldset' => true
		]);
		$this->assertEquals(null, $this->postForm->getAttribute('name'));
	}

	/**
	 * @test
	 */
	public function testSubmitElement()
	{
		$expected = new Button();
		$expected->setName('submit');
		$expected->setAttributes([
			'value' => 'Insert new Post'
		]);
		$this->assertSame(null, $this->postForm->getAttribute('name'));
	}


}
