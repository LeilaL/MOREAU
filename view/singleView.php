<?php
include ("template/header.php");

foreach ($show_infos as $key => $resultat) {

 ?>

<!-- PROJECT CARD -->

      <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $resultat['title']; ?></span>
              <p><?php echo $resultat['description']; ?></p>
            </div>
            <div class="card-action">
              <a href="singleView.php?join=<?php echo $resultat['id'];?>">Ajouter une sous étape</a>
            </div>
          </div>
        </div>
      </div>

      <?php
    } ?>

      <!-- SUBSTEPS -->
<div class="">

  <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span></span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span></span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span></span></div>
    </li>
  </ul>

</div>

      <!-- TASKS -->

      <div class="">

        <ul class="collapsible popout" data-collapsible="accordion">
          <li>
            <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
          </li>
        </ul>

      </div>


<?php
include ("template/footer.php");

 ?>
