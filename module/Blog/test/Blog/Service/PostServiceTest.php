<?php
/**
 * Created by PhpStorm.
 * User: jovana.sabljic
 * Date: 11/23/2016
 * Time: 1:38 PM
 */

namespace Blog\Service;

use Blog\Mapper\PostMapperInterface;
use Blog\Model\Post;

class PostServiceTest extends \PHPUnit_Framework_TestCase
{
	/** @var  PostMapperInterface */
	private $mockedPostMapper;
	/** @var  PostService */
	private $postService;

	public function setUp()
	{
		parent::setUp();

		$this->mockedPostMapper = $this->getMock('Blog\Mapper\PostMapperInterface');
		$this->postService = new PostService($this->mockedPostMapper);
	}

	/**
	 * @test
	 */
	public function testFindAllPostsSuccess()
	{
		$post = new Post();
		$this->mockedPostMapper
			->expects($this->once())
			->method('findAll')
			->willReturn([$post]);

		$response = $this->postService->findAllPosts();
		$this->assertCount(1, $response);
		$this->assertEquals([$post], $response);
	}

	/**
	 * @test
	 */
	public function testDeletePostSuccess()
	{
		$post = new Post();
		$this->mockedPostMapper
			->expects($this->once())
			->method('delete')
			->with($this->equalTo($post))
			->willreturn(true); // boolean true/false

		$response = $this->postService->deletePost($post);
		$this->assertTrue($response);
	}

	/**
	 * @test
	 */
	public function testSavePostSuccess()
	{
		$post = new Post();
		$this->mockedPostMapper
			->expects($this->once())
			->method('save')
			->with($this->equalTo($post))
			->willreturn($post);

		$response = $this->postService->savePost($post);
		$this->assertEquals($post, $response);
	}

	/**
	 * @test
	 */
	public function testFindSuccess()
	{
		$post = new Post();
		$this->mockedPostMapper
			->expects($this->once())
			->method('find')
			->with($this->equalTo('12'))
			->willReturn($post);

		$response = $this->postService->findPost(12);
		$this->assertEquals($post, $response);
	}

	/**
	 * @test
	 * @expectedException \Exception
	 */
	public function testFindFail()
	{
		$this->mockedPostMapper
			->expects($this->once())
			->method('find')
			->with($this->equalTo(12))
			->willThrowException(new \Exception());

		$this->postService->findPost(12);
	}
}
