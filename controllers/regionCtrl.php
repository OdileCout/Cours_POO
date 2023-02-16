<?php
include_once("../models/Regions.php");
$region = new Regions();
$nomTable = "regions";
$region->setTable($nomTable);
$les_regions = $region->selectAll();
// var_dump($les_regions);
// foreach($les_regions as $region){
//     var_dump($region->id);
// }
