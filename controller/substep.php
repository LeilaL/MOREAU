<?php
require_once("../model/substepData.php");

// CHECK INFO OF INPUT

if(isset($_POST['envoi'])){

if(isset($_POST['title'], $_POST['description'])) {
  $title = htmlspecialchars($_POST['title']);
  $description = htmlspecialchars($_POST['description']);
  $id_project = $_GET['join'];
}
else {
  echo 'vous devez entrer des informations';
}

insertInfos_substep($id_project,$title,$description);
header('Location:single.php?join='.$id_project);
}


include("../view/formSubstep_View.php");
 ?>
