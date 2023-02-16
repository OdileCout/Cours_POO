<?php
class Globals{
    private $tables;
    public function getTable(){
        return $this->tables;
    }
    public function setTable($table){
        return $this->tables = $table;
    }
    protected function connexion(){
        $pdo = new PDO('mysql:host=localhost;dbname=blogville;charset=utf8;', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    public function selectAll(){
        $pdostat = $this->connexion()->query("SELECT * FROM ".$this->tables);
        $values = $pdostat->fetchAll(PDO::FETCH_ASSOC);
        return $values;
    }
}