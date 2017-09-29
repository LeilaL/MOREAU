<?php
include("template/header.php");
?>
<div class="container-fluid">
     <div class="row">
<?php
foreach ($show_infos as $key => $resultat) {

 ?>

       <div class="col s12 m6 l4">
         <div class="card blue-grey darken-1">
           <div class="card-content white-text">
             <span class="card-title"><?php echo $resultat['title']; ?></span>
             <p><?php echo $resultat['description']; ?></p>
             <p><?php echo $resultat['dead_line']; ?></p>
           </div>
           <div class="card-action">
             <a href="singleView.php?join=<?php echo $resultat['id'];?>">Voir le projet détaillé</a>
           </div>
         </div>
       </div>


 <?php
 }
 ?>
 </div>

</div>
<?php

 include("template/footer.php");
  ?>
