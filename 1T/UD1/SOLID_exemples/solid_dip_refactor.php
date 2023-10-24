<?php

interface EBook
{
    function read();
}

class EBookReader
{

    private $book;

    function __construct(EBook $book)
    {
        $this->book = $book;
    }

    function read()
    {
        return $this->book->read();
    }
}

class PDFBook implements EBook
{

    function read()
    {
        return "reading a pdf book.";
    }
}

class MobiBook implements EBook
{

    function read()
    {
        return "reading a mobi book.";
    }
}

$reader1 = new EbookReader(new PDFBook());
echo $reader1->read() . "<br>";
$reader2 =  new EbookReader(new MobiBook());
echo $reader2->read() . "<br>";
