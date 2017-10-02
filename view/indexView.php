<?php
include("template/header.php");
?>
<main id="main">

<div class="container-fluid">
     <div class="row">
       <a id="button" class="waves-effect btn-large orange darken-1" href="../view/formProject_View.php">Créer un projet</a></p>

<?php
foreach ($show_infos as $key => $resultat) {

 ?>

       <div class="col s12 m4 l4">
         <div class="card blue-grey darken-1">
           <div class="card-content white-text">
             <span class="card-title"><strong>Projet</strong></span>
             <span class="card-title"><?php echo $resultat['title']; ?></span>
             <p><?php echo $resultat['description']; ?></p>
             <p><?php echo $resultat['dead_line']; ?></p>
           </div>
           <div class="card-action">
             <a href="single.php?join=<?php echo $resultat['id'];?>">Voir le projet détaillé</a>
           </div>
         </div>
       </div>


 <?php
 }
 ?>
 </div>

</div>
</main>

<?php

 include("template/footer.php");
  ?>
