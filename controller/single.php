<?php
require("../model/singleData.php");
require("../model/substepData.php");



$show_cardProject = getInfos_singlePage($_GET['join']);

$show_cardSubstep = getInfos_substep($_GET['join']);



include("../view/singleView.php");
 ?>
