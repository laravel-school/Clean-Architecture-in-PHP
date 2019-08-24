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

	public function getBookAndPublisher()
	{
		return $this->bookName . " " . $this->bookPublisher;
	}
}

class BookFactory
{
	public static function printBook($name, $publisher)
	{
		return new Book($name, $publisher);
	}
}

// Publishing Book.
$book = BookFactory::printBook("Clean Architecture in PHP", "Learn PUB");
print_r($book->getBookAndPublisher());
