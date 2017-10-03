<?php
include ("template/header.php");
?>

<?php
  foreach ($show_cardProject as $key => $resultat) {
?>


<!-- PROJECT CARD -->
<div class="row">
  <div class="col s12 m6 offset-m3 l6 offset-l3">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><strong>Projet</strong></span>
              <span class="card-title"><?php echo $resultat['title']; ?></span>
              <p><?php echo $resultat['description']; ?></p>
              <p><?php echo $resultat['dead_line']; ?></p>
            </div>
            <div class="card-action">
              <a href="../view/formSubstep_View.php?join=<?php echo $_GET['join'];?>">Ajouter une sous étape</a>
            </div>
          </div>
  </div>
  </div>

<?php
}
?>

<div class="row">

<?php
    foreach ($show_cardSubstep as $key => $resultat) {
?>

      <!-- SUBSTEPS -->

      <div class="col s12 m4 l4">
                <div class="card blue-grey darken-1">
                   <div class="card-content white-text">
                     <span class="card-title"><strong>Sous Etape</strong></span>
                     <span class="card-title"><?php echo $resultat['title']; ?></span>
                    <p><?php echo $resultat['description']; ?></p>
                   </div>
                   <div class="card-action">
                     <a href="../view/formTasks_View.php?join=<?php echo $_GET['join'];?>">Créer une tâche</a>

                     <?php
                     $show_cardTasks = getInfos_tasks($resultat['id']);
                     var_dump($resultat['id']);
                         foreach ($show_cardTasks as $key => $req) {
                     ?>

                     <!-- TASKS -->
                     <div class="card-content white-text">
                       <span class="card-title"><strong>Tâche</strong></span>
                       <span class="card-title"><?php echo $req['title']; ?></span>
                       <p><?php echo $req['description']; ?></p>
                      <p></p>
                     </div>

<?php }
 ?>
                   </div>
                 </div>
               </div>




<?php
}
?>

</div>

<?php
include ("template/footer.php");

 ?>
