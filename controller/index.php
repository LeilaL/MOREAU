<?php
require_once("../model/formProject_Data.php");

$show_infos = getInfos();
// print_r($show_infos);

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

include("../view/indexView.php");

 ?>
