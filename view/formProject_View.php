<?php
include('template/header.php');
?>

<div id="form" class="container">
  <a href="indexView.php"><strong>Retour</strong></a>
<div class="row">

    <form class="col s10" enctype="multipart/form-data" action="ajoutImg.php" method="post">

        <div class="input-field col s10">
          <input id="first_name" name="title" type="text" class="validate">
          <label for="first_name">Titre</label>
        </div>

        <div class="input-field col s10">
         <input type="file" name="img_upload" size=50 />
           <input class="waves-effect btn light-blue darken-1" value="Envoyer" type="submit" name="action">
         </div>

        </form>

  </div>
</div>

<?php
include('template/footer.php');
 ?>
