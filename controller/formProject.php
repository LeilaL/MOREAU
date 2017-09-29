<?php
require_once("../model/formProject_Data.php");

// if(!empty($_POST)) {
//
// // TITLE
// if(empty($_POST['title'])) {
//   echo 'vous devez entrer des informations';
// }
// else {
// $title = htmlspecialchars($_POST['title']);
// }
//
// // DESCRIPTION
// if(empty($_POST['desc'])) {
//   echo 'vous devez entrer des informations';
// }
// else {
//   $description = htmlspecialchars($_POST['desc']);
// }

insertInBdd($_POST['title'],$_POST['description'],$_POST['dead_line']);
 // }

include("../view/formProject_View.php");
?>
