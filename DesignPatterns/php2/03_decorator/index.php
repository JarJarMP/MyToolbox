<?php

class PrettyPrint
{
    protected $book = null;

    public function __construct($book_object)
    {
        $this->book = $book_object;
    }

    public function getAuthor()
    {
        return $this->book->author_first_name . " " . $this->book->author_last_name;
    }

    public function getAuthorSortable()
    {
        return $this->book->author_last_name . ", " . $this->book->author_first_name;
    }
}

$book = new stdClass();
$book->title = 'Patterns of Enterprise Application Architecture';
$book->author_first_name = 'Martin';
$book->author_last_name = 'Fowler';

$bookFormatter = new PrettyPrint($book);
echo $book->title . ' is a book written by ' . $bookFormatter->getAuthor() . '<br/>';
echo 'But you will find the book under ' . $bookFormatter->getAuthorSortable() . '<br/>';
