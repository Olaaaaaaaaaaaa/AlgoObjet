<?php

class Adresse{
    public $numero;
    public $voirie;
    public $code_postal;
    public $ville;
    public $pays;
}

class Restaurant{
    public $nom;
    public Adresse $adresse;
}

$resto = new Restaurant();
$resto->nom = "ODelice";

$resto->adresse = new Adresse();

$resto->adresse->numero = 93;
$resto->adresse->voirie = "rue de la pierre";
$resto->adresse->code_postal = "69007";
$resto->adresse->ville = "lyon";
$resto->adresse->pays = "france";

var_dump($resto);