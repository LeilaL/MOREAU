<?php
include('template/header.php');
?>

<div id="form" class="container">
  <h5 class="header center-align">Formulaire Création Projet</h5>
  <a href="indexView.php"><strong>Retour</strong></a>
<div class="row">

    <form class="col s10" action="../controller/index.php" method="post">

        <div class="input-field col s7">
          <input id="first_name" name="title" type="text" class="validate">
          <label for="first_name">Titre</label>
        </div>

        <div class="input-field col s7">
          <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
          <label for="textarea1">Informations Complètes</label>
        </div>

        <div class="input-field col s7">
          <input id="first_name" name="dead_line" type="text" class="validate">
          <label for="first_name">date de fin</label>
        </div>

        <div class="input-field col s10">
           <input class="waves-effect btn light-blue darken-1" value="Envoyer" type="submit" >
         </div>

       </form>

  </div>
</div>





<?php
include('template/footer.php');
 ?>
