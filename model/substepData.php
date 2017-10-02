<?php
require_once("dbconnect/db_connection.php");


// FUNCTION FOR INSERT IN BDD SUBSTEPS
function insertInfos_substep($title, $description){
  $bdd = get_dataBase();
$req = $bdd->prepare('INSERT INTO substeps SET title= ?, description= ?');
$req->execute(array(
    $title, $description
  ));
}


 ?>
