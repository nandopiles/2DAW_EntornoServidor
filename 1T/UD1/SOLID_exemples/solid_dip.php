<?php
class EbookReader
{

    private $book;

    public function __construct()
    {
        $this->book = new PDFBook();
    }

    public function read()
    {
        return $this->book->read();
    }

}

class PDFBook
{

    public function read()
    {
        return "reading a pdf book.";
    }
}

class MobiBook {
 
    function read() {
        return "reading a mobi book.";
    }
}
