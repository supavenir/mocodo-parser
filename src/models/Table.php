<?php

namespace App\models;

class Table extends DbObjet
{

    public function enSQL(): string
    {
        return "CREATE TABLE $this->nom...";
    }
}