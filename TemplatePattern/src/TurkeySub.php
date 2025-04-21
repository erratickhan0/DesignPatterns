<?php
namespace TemplatePattern;

class TurkeySub extends Sub
{
    function addPrimaryDish()
    {
        var_dump('add turkey');
        return $this;
    }
}
