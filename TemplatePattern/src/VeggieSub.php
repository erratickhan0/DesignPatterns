<?php

namespace TemplatePattern;
class VeggieSub extends Sub
{
    function addPrimaryDish()
    {
        var_dump('add veggies');
        return $this;
    }
}