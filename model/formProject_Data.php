<?php
require_once ("dbconnect/db_connection.php");


function insertInBdd($title,$description,$dead_line){
  $bdd = get_dataBase();
$req = $bdd->prepare('INSERT INTO projects SET title = ?, description = ?, dead_line = ?');
$req->execute(array(
    $title, $description, $dead_line
  ));
}

function getInfos() {
  $bdd = get_dataBase();
$donnees = $bdd->prepare('SELECT * FROM projects');
$donnees->execute();
$resultat = $donnees->fetchAll(PDO::FETCH_ASSOC);
return $resultat;
}



?>
