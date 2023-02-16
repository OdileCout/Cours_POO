<?php
include_once("Global.php");
class User extends Globals{
    private $id = 0;
    private $mail = "";
    private $pseudo = "";
    private $mdp = "";
    private $id_citie = 0;
    private $id_roles = 0;
    private $avatar = "";
    private $active = 0;
    private $connexion = null;
    // public function __construct($host,$dbname, $user, $mdpBdd)
    // {
    //     $this->connexion = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;', $user, $mdpBdd);
    //     $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // }
    public function afficherUser(){
        $pdostat = $this->connexion()->query("SELECT email, pseudo, cities.name FROM utilisateurs INNER JOIN cities ON utilisateurs.id_citie = cities.id");
        $values = $pdostat->fetchAll(PDO::FETCH_ASSOC);
        return $values;
    }

}