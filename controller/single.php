<?php
require("../model/singleData.php");
require("../model/substepData.php");
require("../model/tasksData.php");


$show_cardProject = getInfos_singlePage();

$show_cardSubstep = getInfos_substep();




$show_cardTasks = getInfos_tasks();

include("../view/singleView.php");
