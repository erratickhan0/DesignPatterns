<?php

namespace Acme;

class EReaderAdapter implements BookInterface
{
    private $reader;
    public function __construct(EReaderInterface $reader)
    {
        $this->reader = $reader;
    }
    public function open()
    {
        $this->reader->turnOn();
    }

    public function turnPage()
    {
        $this->reader->pressNextPage();
    }
}