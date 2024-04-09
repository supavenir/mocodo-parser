<?php

namespace App\models;

abstract class DbObjet
{
    public function __construct(string $nom){
        $this->nom=$nom;
    }

    protected string $nom;
    public abstract function enSQL():string;
}