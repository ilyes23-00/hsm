<?php
  $title = "secrecaitre";
  $file = "header.php";
  $css_file = "secrecaitre.css";
  include(__DIR__."./../../inc/".$file);

  require_once '../../helpers/resident.inc.php';
  // session_start();
	if(!isset($_SESSION['name'])){
		header("location:index.php");
	}
?>
  <section class="home-section">

        <div class="user_name">
          <i class="login__icon fas fa-user"></i>
          <span >            
            <?php
              echo $_SESSION["work"];
            ?></span>
          </div>


  <!-- show data  -->

    <!-- Table Des malade  -->
    <div class="container ">

      <h2 class="text-center my-3">Table Des malade 
        <?php
                echo "Pour " .  $_SESSION["name"];
        ?> </h2>
      <ul class="responsive-table ">
        <li class="table-header">
          <div class="col col-1">Malade Id</div>
          <div class="col col-4">Nom</div>
          <div class="col col-4">age</div>
          <div class="col col-4">telephone</div>
          <div class="col col-2">Envoi malade</div>
          <div class="col col-2">action</div>

        </li>
        <?php
          foreach($residents as $resident){

          ?>
        <li class="table-row">
          <div class="col col-1" data-label="Malade Id"><?= $resident['idm']; ?></div>
          <div class="col col-4" data-label="Nom"><?= $resident['nom'] ." ". $resident['Prenom'];  ?></div>
          <div class="col col-4" data-label="age"><?= $resident['age']; ?></div>
          <div class="col col-4" data-label="telephone"><?= $resident['telephone']; ?></div>
          <div class="col col-2" data-label="action">
              <a href="Fiche_Clinique.php?id=<?= $resident['idm']; ?>" type="button" class="btn btn-danger delete mb-2" >Fiche Clinique</a>
          </div>

        </li>
        <?php
          }

          ?>


      </ul>
    </div>
    <!-- Table Des malade  -->
  <!-- show data  -->


  </section>

<?php

  $file_js = "footer.php";
  $js_file = "secretaire.js";
  include(__DIR__."./../../inc/".$file_js);
?>