<?php 

class Book
{
	private $bookName;
	private $bookPublisher;

	function __construct($name, $publisher)
	{
		$this->bookName = $name;
		$this->bookPublisher = $publisher;
	}

	public static function getBookAndPublisher()
	{
		return $this->bookName . " " . $this->bookPublisher;
	}
}