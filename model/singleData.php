<?php
require_once("dbconnect/db_connection.php");

// FUNCTION FOR GET INFOS FROM BDD FOR SINGLE PAGE
function getInfos_singlePage($id_num) {
  $bdd = get_dataBase();
$donnees = $bdd->prepare('SELECT * FROM projects WHERE id=:id');
$donnees->execute(array(
  'id'=>$id_num
));
$resultat = $donnees->fetchAll(PDO::FETCH_ASSOC);
return $resultat;
}

// FUNCTION FOR GET INFO FROM BDD FOR SINGLE PAGE SUBSTEPS
function getInfos_substep($id_num) {
  $bdd = get_dataBase();
$donnees = $bdd->prepare('SELECT * FROM projects, substeps WHERE substeps.id_project = projects.id');
$donnees->execute(array(
  'id'=>$id_num
));
$resultat = $donnees->fetchAll(PDO::FETCH_ASSOC);
return $resultat;
}


 ?>
