<?php
namespace Blog\Model;

class Post implements PostInterface
{
	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $text;

	/**
	 * {@inheritDoc}
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param $id
	 * @throws \Exception
	 */
	public function setId($id)
	{
		if (!is_int($id)) {
			throw new \InvalidArgumentException('\Blog\Model\Post::setId expects integer');
		}
		$this->id = $id;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title)
	{
		if (!is_string($title)) {
			throw new \InvalidArgumentException('\Blog\Model\Post::setId expects string');
		}
		$this->title = $title;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getText()
	{
		return $this->text;
	}

	/**
	 * @param string $text
	 */
	public function setText($text)
	{
		if (!is_string($text)) {
			throw new \InvalidArgumentException('\Blog\Model\Post::setId expects string');
		}
		$this->text = $text;
	}
}
