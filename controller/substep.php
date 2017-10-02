<?php
require_once("../model/substepData.php");

// CHECK INFO OF INPUT
if(isset($_POST)) {

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

var_dump($_POST);
insertInfos_substep($title,$description);
header('Location:single.php');

}

include("../view/formSubstep_View.php");
 ?>
