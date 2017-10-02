<?php
include ("template/header.php");
?>

<?php
  foreach ($show_cardProject as $key => $resultat) {
?>


<!-- PROJECT CARD -->
<div class="row">
  <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $resultat['title']; ?></span>
              <p><?php echo $resultat['description']; ?></p>
              <p><?php echo $resultat['dead_line']; ?></p>
            </div>
            <div class="card-action">
              <a href="../controller/substep.php?join=<?php echo $resultat['id'];?>">Ajouter une sous étape</a>
            </div>
          </div>
  </div>
  </div>

<?php
}

    foreach ($show_cardSubstep as $key => $resultat) {
?>

      <!-- SUBSTEPS -->

             <div class="row">
              <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                   <div class="card-content white-text">
                     <span class="card-title"><?php echo $resultat['title']; ?></span>
                    <p<?php echo $resultat['description']; ?>></p>
                   </div>
                   <div class="card-action">
                     <a href="#">Créer une tâche</a>
                   </div>
                 </div>
               </div>
             </div>




<?php
}
include ("template/footer.php");

 ?>
