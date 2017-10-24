<?php

use DesignPatterns\Structural\Adapter\Book;
use DesignPatterns\Structural\Adapter\EBookAdapter;
use DesignPatterns\Structural\Adapter\Kindle;

class AdapterTest extends \PHPUnit\Framework\TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindleBook = new Kindle();
        $eBookAdapter = new EBookAdapter($kindleBook);

        $eBookAdapter->open();
        $eBookAdapter->turnPage();

        $this->assertEquals(2, $eBookAdapter->getPage());
    }
}