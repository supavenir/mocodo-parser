<?php

namespace App\models;

class BaseDeDonnees extends DbObjet
{
    private $tables=[];

    public function __construct(string $nom){
        parent::__construct($nom);
    }

    public function ajouterTable(string $nom){
        $this->tables[]=new Table($nom);
    }

    public function enSQL(): string
    {
        $script= "CREATE DATABASE $this->nom;";
        foreach ($this->tables as $table){
            $script.=$table->enSQL();
        }
        return $script;
    }
}