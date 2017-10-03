<?php
require_once("dbconnect/db_connection.php");

// FUNCTION FOR GET INFOS FROM BDD FOR SINGLE PAGE
function getInfos_singlePage() {
  $bdd = get_dataBase();
$donnees = $bdd->prepare('SELECT * FROM projects WHERE id=?');
$donnees->execute(array(
  $_GET['join']
));
$resultat = $donnees->fetchAll(PDO::FETCH_ASSOC);
return $resultat;
}

// FUNCTION FOR GET INFO FROM BDD FOR SINGLE PAGE SUBSTEPS
function getInfos_substep() {
  $bdd = get_dataBase();
$donnees = $bdd->prepare('SELECT * FROM substeps WHERE substeps.id_project=?');
$donnees->execute(array(
  $_GET['join']
));
$resultat = $donnees->fetchAll(PDO::FETCH_ASSOC);
return $resultat;
}

// FUNCTION FOR GET INFO FROM BDD FOR SINGLE PAGE TASKS
function getInfos_tasks() {
  $bdd = get_dataBase();
$donnees = $bdd->prepare('SELECT * FROM tasks WHERE tasks.id_substep=?');
$donnees->execute(array(
  $_GET['join']
));
$resultat = $donnees->fetchAll(PDO::FETCH_ASSOC);
return $resultat;
}


 ?>
