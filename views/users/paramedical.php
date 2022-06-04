<?php
  $title = "paramedical";
  $file = "header.php";
  $css_file = "secrecaitre.css";
  include(__DIR__."./../../inc/".$file);

  require_once '../../helpers/paramedical.inc.php';
  
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

          <div class="servive_job">
            <div class="box produitBox" onclick='showProduit();'>
            <i class="fas fa-user-edit"></i><br>
            <span>Enregistrer Produit</span>
            </div>
            <div class="box" onclick='showInstrument();'>
            <i class="fas fa-user-plus"></i><br>
            <span>Enregistrer instrument</span>
            </div>

        </div>

 
  <!-- show data  -->
  <div class="show_data py-3">
      <div class="container py-3">
        <!-- Produit -->
        <div class="Produit my-3">
          <h5>Produit</h5>
          <form method="POST">
            <div class="row mb-3">
              <label for="Nature" class="col-sm-2 col-form-label mt-3">Nature</label>
              <div class="col-sm-10 mt-3">
                <input type="text" class="form-control" id="Nature" name="Nature">
              </div>
              <label for="date" class="col-sm-2 col-form-label mt-3">date arrive</label>
              <div class="col-sm-10 mt-3">
                <input type="date" class="form-control" id="date" name="date">
              </div>

              <label for="quantité" class="col-sm-2 col-form-label mt-3">quantité</label>
              <div class="col-sm-10 mt-3">
                <input type="number" class="form-control" id="quantité" name="quantité">
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="submit_produits" >Send</button>
          </form>
          <hr>
        </div>
          <!-- Produit -->

          <!--  instrument -->
        <div class="instrument my-3">
          <h5>instrument</h5>
          <form method="POST">
            <div class="row mb-3">
              <label for="types" class="col-sm-2 col-form-label mt-3">types</label>
              <div class="col-sm-10 mt-3">
                <input type="text" class="form-control" id="types" name="type">
              </div>
              <label for="dates" class="col-sm-2 col-form-label mt-3">date arrive</label>
              <div class="col-sm-10 mt-3">
                <input type="date" class="form-control" id="dates" name="date">
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="submit_instrument" >Send</button>
          </form>
          <hr>
        </div>
          <!--  instrument -->
  </div>
  <!-- show data  -->


  <!-- produits -->
      <!-- Table Des produit  -->
<div class="container produitTable">

      <h2 class="text-center my-3">Table Des produit 
        <?php
                echo "Pour " .  $_SESSION["name"];
        ?> </h2>
      <ul class="responsive-table ">
        <li class="table-header">
          <div class="col col-1">produit Id</div>
          <div class="col col-4">Natture</div>
          <div class="col col-4">date Arrive</div>
          <div class="col col-4">Quantite</div>

          <div class="col col-2">action</div>
        </li>
        <?php
          foreach($produits as $su){
          ?>
        <li class="table-row">
          <div class="col col-1" data-label="produit Id"><?= $su['idpr']; ?></div>
          <div class="col col-4" data-label="type"><?= $su['Nature'];  ?></div>
          <div class="col col-4" data-label="date Arrive"><?= $su['dateArrive']; ?></div>
          <div class="col col-4" data-label="Quantite"><?= $su['quantite']; ?></div>
          <div class="col col-2" data-label="action">
          <a type="button" class="btn btn-danger delete mb-2" >Delete</a>
          </div>
        </li>
        <?php 
        }
        ?>

      </ul>
</div>
<!-- Table Des produit  -->
  <!-- produits -->

        <!-- Table Des instrument  -->
<div class="container instrumentTable">

    <h2 class="text-center my-3">Table Des instrument 
      <?php
              echo "Pour " .  $_SESSION["name"];
      ?> </h2>
    <ul class="responsive-table ">
      <li class="table-header">
        <div class="col col-1">instrument Id</div>
        <div class="col col-4">type</div>
        <div class="col col-4">date Arrive</div>


        <div class="col col-2">action</div>
      </li>
      <?php
        foreach($instrument as $su){
        ?>
      <li class="table-row">
        <div class="col col-1" data-label="produit Id"><?= $su['idi']; ?></div>
        <div class="col col-4" data-label="type"><?= $su['type'];  ?></div>
        <div class="col col-4" data-label="date Arrive"><?= $su['dateArrive']; ?></div>
        <div class="col col-2" data-label="action">
        <a type="button" class="btn btn-danger delete mb-2" >Delete</a>
        </div>
      </li>
      <?php 
      }
      ?>

    </ul>
</div>
<!-- Table Des produit  -->

  </section>

<?php

  $file_js = "footer.php";
  $js_file = "secretaire.js";
  include(__DIR__."./../../inc/".$file_js);
?>