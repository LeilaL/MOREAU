<?php
require_once("dbconnect/db_connection.php");


// FUNCTION FOR INSERT IN BDD SUBSTEPS
function insertInfos_substep($id_project, $title, $description){
  $bdd = get_dataBase();
$req = $bdd->prepare('INSERT INTO substeps SET id_project=:id_project, title=:title, description=:description');
$req->execute(array(
    $id_project, $title, $description
  ));
}


 ?>
