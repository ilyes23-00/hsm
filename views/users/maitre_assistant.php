<?php
  $title = "maitre assistant";
  $file = "header.php";
  $css_file = "secrecaitre.css";
  include(__DIR__."./../../inc/".$file);

  require_once '../../helpers/maitre_assistant.inc.php';

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
            <div class="box" onclick='showMalade();'>
            <i class="fas fa-user-plus"></i><br>
            <span>Ajoute malade</span>
            </div>
        </div>

  <!-- show data  -->
    <div class="show_data py-3">
      <div class="container">
                 <!-- malade -->
          <div class="malade my-3">
            <h5>Malade</h5>
              <form method="POST">
                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label mt-3">name</label>
                  <div class="col-sm-10 mt-3">
                    <input type="text" class="form-control" id="name" name="Nom">
                  </div>
                  <label for="Prenom" class="col-sm-2 col-form-label mt-3">Prenom</label>
                  <div class="col-sm-10 mt-3">
                    <input type="text" class="form-control" id="Prenom" name="Prenom">
                  </div>
                  <div class="input-group mt-3">
                    <label class="input-group-text" for="inputGroupSelect01">genre</label>
                    <select class="form-select" id="inputGroupSelect01" name="genre">
                      <option selected>Choose...</option>
                      <option value="male">male</option>
                      <option value="female">female</option>

                    </select>
                  </div>
                  <label for="Date-naissance" class="col-sm-2 col-form-label mt-3">Date naissance</label>
                  <div class="col-sm-10 mt-3">
                    <input type="date" class="form-control" id="Date-naissance" name="naissance">
                  </div>
                
                  <label for="Age" class="col-sm-2 col-form-label mt-3">Age</label>
                  <div class="col-sm-10 mt-3">
                    <input type="text" class="form-control" id="Age" name="Age">
                  </div>
                  <label for="adresse" class="col-sm-2 col-form-label mt-3">adresse</label>
                  <div class="col-sm-10 mt-3">
                    <input type="text" class="form-control" id="adresse" name="adresse">
                  </div>
                  <label for="telephone" class="col-sm-2 col-form-label mt-3">telephone</label>
                  <div class="col-sm-10 mt-3">
                    <input type="text" class="form-control" id="telephone" name="telephone">
                  </div>
                
                </div>
                <button type="submit" class="btn btn-primary mt-3" name="submit_malade" >Send</button>
              </form>
          </div>
          <!-- malade -->
        </div>
      </div>
 
  <!-- show data  -->

    <!-- Table Des malade  -->
    <div class="container maladeTable">

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
          // print_r($row1);
          foreach($row1 as $supp){

          ?>
        <li class="table-row">
        <form action="" method="POST" style="display: contents;">
            <input type="hidden" name="idm" value="<?= $supp['idm']; ?>">
              <div class="col col-1" data-label="Malade Id"><?= $supp['idm']; ?></div>
              <div class="col col-4" data-label="Nom"><?= $supp['nom'] ." ". $supp['Prenom'];  ?></div>
              <div class="col col-4" data-label="age"><?= $supp['age']; ?></div>
              <div class="col col-4" data-label="telephone"><?= $supp['telephone']; ?></div>
              <div class="col col-2" data-label="Envoi malade">
                    <div class="form-floating">
    
                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="profil">
                      <option selected>Choix Resident</option>

                          <?php
                              foreach($ResidentMs as $ResidentM){
                              ?>
                                  <option  value="<?= $ResidentM['Nom'];?>"><?= $ResidentM['idp'] .'-'.  $ResidentM['Nom']; ?> </option>
                              <?php
                              }
                              ?>
                          </select>

                    </div>
                  </div>
                  <div class="col col-2" data-label="action">
              
                  <a href="Fiche_Clinique.php?id=<?= $supp['idm']; ?>" type="button" class="btn btn-danger delete mb-2" >Fiche Clinique</a>

                  <button type="submit" class="btn btn-danger delete mb-2" name="submit">Envoyer</button>
            
            
        
              </div>
              </form>
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