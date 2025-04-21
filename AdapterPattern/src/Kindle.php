<?php

namespace Acme;

class Kindle implements EReaderInterface
{
    public function turnOn(){
        var_dump('turn the kindle on');
    }
    public function pressNextPage()
    {
        var_dump('press the next button on kindle');
    }

}