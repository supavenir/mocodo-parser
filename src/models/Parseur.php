<?php

namespace App\models;

class Parseur
{
    private string $scriptMocodo;

    public function __construct(string $script){
        $this->scriptMocodo=$script;
    }

    public function __toString()
    {
        return $this->scriptMocodo;
    }
}