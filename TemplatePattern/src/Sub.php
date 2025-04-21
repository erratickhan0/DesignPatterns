<?php

namespace TemplatePattern;

abstract class Sub
{
    public function make()
    {
        return $this
            ->layBread()
            ->addPrimaryDish()
            ->addLetuce()
            ->addSauces();
    }
    protected function layBread()
    {
        var_dump('lay bread');
        return $this;
    }

    protected function addLetuce()
    {
        var_dump('add letuce');
        return $this;
    }
    protected function addSauces()
    {
        var_dump('add sauces');
        return $this;
    }
    abstract function addPrimaryDish();

}