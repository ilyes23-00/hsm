<?php
$title = "secrecaitre";
$file = "header.php";
$css_file = "secrecaitre.css";

include(__DIR__."./../../inc/".$file);

require_once '../../helpers/paramedical.inc.php';
require_once '../../helpers/secretaire.inc.php';
require_once '../../helpers/chef_service.inc.php';


  // session_start();
if(!isset($_SESSION['name'])){
  header("location:index.php");
}


?>
<section class="home-section">

  <div class="user_name">
    <i class="login__icon fas fa-user"></i>
    <span>
      <?php
      echo $_SESSION["work"];
      ?>
    </span>
  </div>

  <div class="servive_job">
    <div class="box equipmentBox"  onclick='showEquipment();'>
      <i class="fas fa-user-edit"></i><br>
      <span>Enregistrer equipement</span>
    </div>
    <div class="box personlBox" onclick='showPersonal();'>
      <i class="fas fa-user-plus" ></i><br>
      <span>Enregistrer personal</span>
    </div>
    <div class="box maladeBox" onclick='showMalade();'>
      <i class="fas fa-user-check"></i><br>
      <span>Enregistrer malade</span>
    </div>
    <div class="box produitBox " onclick='showProduit();'>
      <i class="fas fa-user-edit"></i><br>
      <span>Enregistrer Produit</span>
    </div>
    <div class="box instrumentBox" onclick='showInstrument();'>
      <i class="fas fa-user-plus"></i><br>
      <span>Enregistrer instrument</span>
    </div>

  </div>

  <!-- show data  -->
  <div class="show_data py-3">
    <div class="container py-3">
      <!-- equipement -->
      <div class="equipment my-3">
        <h5>Equipment</h5>
        <form method="POST">
          <div class="row mb-3">
            <label for="type" class="col-sm-2 col-form-label mt-3">type</label>
            <div class="col-sm-10 mt-3">
              <input type="text" class="form-control" id="type" name="type">
            </div>
            <label for="date" class="col-sm-2 col-form-label mt-3">date arrive</label>
            <div class="col-sm-10 mt-3">
              <input type="date" class="form-control" id="date" name="date">
            </div>
            <label for="anomalies" class="col-sm-2 col-form-label mt-3">anomalie</label>
            <div class="col-sm-10 mt-3">
              <input type="text" class="form-control" id="anomalies" name="anomalies">
            </div>
            <label for="Dateanomalies" class="col-sm-2 col-form-label mt-3">Date anomalie</label>
            <div class="col-sm-10 mt-3">
              <input type="date" class="form-control" id="Dateanomalies" name="Dateanomalies">
            </div>



          </div>
          <button type="submit" class="btn btn-primary mt-3" name="submit_equipment">Send</button>
        </form>
        <hr>
      </div>
      <!-- equipement -->

      <!-- personl -->
      <div class="personal my-3">
        <h5>Personl</h5>
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
              <label class="input-group-text" for="inputGroupSelect01">Profil</label>
              <select class="form-select" id="inputGroupSelect01" name="Profil">
                <option selected>Choose...</option>
                <option value="secretaire">secretaire</option>
                <option value="paramedical">paramedical</option>
                <option value="chef_service">chef_service</option>
                <option value="resident">resident</option>
                <option value="maitre_assistant">maitre_assistant</option>
              </select>
            </div>
            <label for="Date-Recrutement" class="col-sm-2 col-form-label mt-3">Date Recrutement</label>
            <div class="col-sm-10 mt-3">
              <input type="date" class="form-control" id="Date-Recrutement" name="DateRecrutement"> 
            </div>
            <label for="password" class="col-sm-2 col-form-label mt-3">password</label>
            <div class="col-sm-10 mt-3">
              <input type="text" class="form-control" id="password" name="password">
            </div>


          </div>
          <button type="submit" class="btn btn-primary mt-3" name="submit_personal">Send</button>
        </form>
        <hr>
      </div>
      <!-- personl -->

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
      <div class="instrument my-3"  >
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
            <label for="anomalie" class="col-sm-2 col-form-label mt-3">anomalie</label>
            <div class="col-sm-10 mt-3">
              <input type="text" class="form-control" id="anomalie" name="anomalie">
            </div>
            <label for="Dateanomalie" class="col-sm-2 col-form-label mt-3"> Date anomalie</label>
            <div class="col-sm-10 mt-3">
              <input type="date" class="form-control" id="Dateanomalie" name="Dateanomalie">
            </div>
            <label for="QuantiteAnomalie" class="col-sm-2 col-form-label mt-3">Quantite</label>
            <div class="col-sm-10 mt-3">
              <input type="number" class="form-control" id="QuantiteAnomalie" name="QuantiteAnomalie">
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3" name="submit_instrument" >Send</button>
        </form>
        <hr>
      </div>
      <!--  instrument -->


    </div>
  </div>
  <!-- show data  -->

  <!-- table consulter -->

  <div class="container equipmentTable">

    <h2 class="text-center my-3">Table Des equipement </h2> 
    <ul class="responsive-table my-3">
      <li class="table-header">
        <div class="col col-1">Equipment Id</div>
        <div class="col col-1">type</div>
        <div class="col col-1">date Arrive</div>
        <div class="col col-1">anomalies</div>
        <div class="col col-1">date anomalies</div>
        <div class="col col-1">Action</div>

      </li>

      <?php
      foreach($row as $supp){

        ?>
        <li class="table-row">
          <div class="col col-1" data-label="Equipment Id"><?= $supp['ide']; ?></div>
          <div class="col col-1" data-label="type"><?= $supp['type']; ?></div>
          <div class="col col-1" data-label="date Arrive"><?= $supp['dateArrive']; ?></div>
          <div class="col col-1" data-label="anomalies"><?= $supp['anomalies']; ?></div>
          <div class="col col-1" data-label="date anomalies"><?= $supp['Dateanomalies']; ?></div>
          <div class="col col-1" data-label="Action">


            <button type="button" class="btn btn-danger delete mb-2" >Delete</button>
          </div>

        </li>
        <?php 
      }
      ?>
    </ul>
  </div>


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
        foreach($row1 as $supp){

          ?>
          <li class="table-row">
            <form method="POST" style="display: contents;">
              <input type="hidden" name="idm" value="<?= $supp['idm']; ?>">
              <div class="col col-1" data-label="Malade Id"><?= $supp['idm']; ?></div>
              <div class="col col-4" data-label="Nom"><?= $supp['nom'] ." ". $supp['Prenom'];  ?></div>
              <div class="col col-4" data-label="age"><?= $supp['age']; ?></div>
              <div class="col col-4" data-label="telephone"><?= $supp['telephone']; ?></div>
              <div class="col col-2" data-label="Envoi malade">
                <div class="form-floating">
                  <select class="form-select floatingSelect" id="floatingSelect_<?= $supp['idm']; ?>" aria-label="Floating label select example" name="profil">
                    <option selected>Choix maitre assistant</option>

                    <?php
                    foreach($row3 as $pers){
                      ?>
                      <option  value="<?= $pers['Nom'];?>"><?= $pers['idp'] .'-'.  $pers['Nom']; ?></option>
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

    <!-- Table Des personal  -->
    <div class="container personalTable">

      <h2 class="text-center my-3">Table Des personal 
        <?php
        echo "Pour " .  $_SESSION["name"];
        ?> </h2>
        <ul class="responsive-table ">
          <li class="table-header">
            <div class="col col-1">personal Id</div>
            <div class="col col-4">Nom</div>
            <div class="col col-4">Profil</div>
            <div class="col col-4">Date Recrutement</div>

            <div class="col col-2">action</div>

          </li>
          <?php
          foreach($row2 as $supp){

            ?>
            <li class="table-row">
              <div class="col col-1" data-label="personal Id"><?= $supp['idp']; ?></div>
              <div class="col col-4" data-label="Nom"><?= $supp['Nom'] ." ". $supp['Prenom'];  ?></div>
              <div class="col col-4" data-label="age"><?= $supp['Profil']; ?></div>
              <div class="col col-4" data-label="telephone"><?= $supp['DateRecrutement']; ?></div>
              <div class="col col-2" data-label="action">


                <a type="button" class="btn btn-danger delete mb-2" >Delete</a>
              </div>

            </li>
            <?php 
          }
          ?>

        </ul>
      </div>
      <!-- Table Des personal  -->


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
                <div class="col col-4">anomalie</div>
                <div class="col col-4">date anomalie</div>
                <div class="col col-4">Quantite Anomalie</div>

                <div class="col col-4">action</div>
              </li>
              <?php
              foreach($instrument as $su){
                ?>
                <li class="table-row">
                  <div class="col col-1" data-label="instrument Id"><?= $su['idi']; ?></div>
                  <div class="col col-4" data-label="type"><?= $su['type'];  ?></div>
                  <div class="col col-4" data-label="date Arrive"><?= $su['dateArrive']; ?></div>
                  <div class="col col-4" data-label="anomalie"><?= $su['anomalie']; ?></div>
                  <div class="col col-4" data-label="date anomalie"><?= $su['Dateanomalie']; ?></div>
                  <div class="col col-4" data-label="Quantite Anomalie"><?= $su['QuantiteAnomalie']; ?></div>
                  <div class="col col-4" data-label="action">
                    <a type="button" class="btn btn-danger delete mb-2" >Delete</a>
                  </div>
                </li>
                <?php 
              }
              ?>

            </ul>
          </div>
          <!-- Table Des instrument  -->


          <!-- table consulter -->



        </section>




        <?php

        $file_js = "footer.php";
        $js_file = "secretaire.js";
        include(__DIR__."./../../inc/".$file_js);
        ?>