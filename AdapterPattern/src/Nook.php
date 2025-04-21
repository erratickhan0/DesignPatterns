<?php

namespace Acme;

class Nook implements EReaderInterface
{

    public function turnOn()
    {
        var_dump('turn the nook on');
    }

    public function pressNextPage()
    {
        var_dump('press the next button on nook');
    }
}