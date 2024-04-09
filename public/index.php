<?php
use App\models\Parseur;

require_once './../vendor/autoload.php';
$script='typeDroit: id, nom
  
Periode: id, dateD, dateF
Droit, 1N Exploitation, 1N typeDroit, 1N Periode: valeur
Exploitation: id, nom, SAU
  
Commune: id, cp, ville
DF, 11 Exploitation, 0N Commune';

$parseur=new Parseur($script);
$db=new \App\models\BaseDeDonnees("Test");
$db->ajouterTable("Client");
$db->ajouterTable("Commande");
$db->ajouterTable("Facture");
echo $db->enSQL();