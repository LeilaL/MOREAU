<?php
require_once("../model/tasksData.php");

// CHECK INFO OF INPUT

if(isset($_POST['send'])){

if(isset($_POST['title'], $_POST['description'])) {
  $title = htmlspecialchars($_POST['title']);
  $description = htmlspecialchars($_POST['description']);
  $id_substep = $_GET['join'];
}
else {
  echo 'vous devez entrer des informations';
}

insertInfos_tasks($id_substep, $title, $description);
header('Location:single.php?join='.$id_substep);
}




include("../view/formTasks_View.php");
 ?>
