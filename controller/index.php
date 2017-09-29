<?php
require_once("../model/indexData.php");

$show_infos = getInfos();

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

// DEAD_LINE
if(empty($_POST['dead_line'])) {
  echo 'vous devez entrer des informations';
}
else {
  $dead_line = htmlspecialchars($_POST['dead_line']);
}


$insertion = insertInBdd($title,$description,$dead_line);

}

// FINISH CHECK + INSERT INPUT INFOS

// header('Location:../view/indexView.php');


include("../view/indexView.php");
// include("../view/singleView.php");

 ?>
