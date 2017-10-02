<?php
require("../model/singleData.php");
require("../model/substepData.php");



$show_cardProject = getInfos_singlePage();

$show_cardSubstep = getInfos_substep();



include("../view/singleView.php");
 ?>
