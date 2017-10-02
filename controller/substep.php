<?php
require_once("../model/substepData.php");

// CHECK INFO OF INPUT
if(!empty($_POST)) {

// TITLE
if(empty($_POST['title'])) {
  echo 'vous devez entrer des informations';
}
else {
$title = htmlspecialchars($_POST['title']);
}

// DESCRIPTION
if(empty($_POST['description'])) {
  echo 'vous devez entrer des informations';
}
else {
  $description = htmlspecialchars($_POST['description']);
}

 insertInfos_substep($id_project, $title, $description);
header('Location:single.php?join=' .$_GET['join']);

}

include("../view/formSubstep_View.php");
 ?>
