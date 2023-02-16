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
    //Cette fonction retour la liste des utilisateurs avec sa ville 
    public function afficherUser(){
        $pdostat = $this->connexion()->query("SELECT email, pseudo, cities.name FROM utilisateurs INNER JOIN cities ON utilisateurs.id_citie = cities.id");
        $values = $pdostat->fetchAll(PDO::FETCH_ASSOC);
        return $values;
    }

}