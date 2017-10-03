<?php
require_once("dbconnect/db_connection.php");


// FUNCTION FOR INSERT IN BDD TASKS
function insertInfos_substep($id_substep, $title, $description){
  $bdd = get_dataBase();
$req = $bdd->prepare('INSERT INTO tasks SET id_substep= ?, title= ?, description= ?');
$req->execute(array(
    $id_substep, $title, $description
  ));
}


 ?>
