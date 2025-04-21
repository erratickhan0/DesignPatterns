<?php

interface Logger
{
    public function logging($data);
}
class LogToFile implements Logger
{

    public function logging($data)
    {
        var_dump($data.'logged data to file');
    }

}
class LogToDatabase implements Logger
{
    public function logging($data)
    {
        var_dump($data.'logged data to db');
    }
}
class LogToXService implements Logger
{

    public function logging($data)
    {
        var_dump($data.'logged data to service');
    }
}

class App{

    public function logger($data,Logger  $logger)
    {
        $logger->logging($data);
    }
}

    (new App())->logger('logging:',new LogToDatabase());
(new App())->logger('logging:',new LogToFile());
(new App())->logger('logging:',new LogToXService());