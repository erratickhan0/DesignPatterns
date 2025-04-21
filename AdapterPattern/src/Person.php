<?php

namespace Acme;

require "../vendor/autoload.php";

class Person
{
    public function read(BookInterface  $book)
    {
        $book->open();
        $book->turnPage();
    }

}
 (new Person)->read(new EReaderAdapter( new Nook()));