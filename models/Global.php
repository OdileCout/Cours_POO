<?php
class Globals{
    private $tables;
    //C'est l'accésseur de l'attribut table
    public function getTable(){
        return $this->tables;
    }
    public function setTable($table){
        return $this->tables = $table;
    }
    //Cette methode retourne la connexion avec la base de donnés
    protected function connexion(){
        $pdo = new PDO('mysql:host=localhost;dbname=blogville;charset=utf8;', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    //Cette fonction envoie une requête qui fait de la selection dans une table 
    public function selectAll(){
        $pdostat = $this->connexion()->query("SELECT * FROM ".$this->tables);
        $values = $pdostat->fetchAll(PDO::FETCH_ASSOC);
        return $values;
    }
}