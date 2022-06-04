<?php
  $title = "secrecaitre";
  $file = "header.php";
  $css_file = "secrecaitre.css";
  include(__DIR__."./../../inc/".$file);



  require_once '../../helpers/secretaire.inc.php';

  $sql ="SELECT * FROM  equipement  WHERE idp = :user_id";
  $query = $db->prepare($sql);
  $query->bindParam(':user_id',$id_user);
  $query->execute();
  $row = $query->fetchAll(PDO::FETCH_ASSOC);


  //  session_start();
	// if(!isset($_SESSION['username'])){
	// 	header("location:../../index.php");
	// }
?>
  <section class="home-section">

        <div class="user_name">
          <i class="login__icon fas fa-user"></i>
          <span >            
            <?php
              echo $_SESSION["work"];

              // echo $id_user;
            ?></span>
          </div>

          <div class="servive_job">
            <div class="box equipmentBox" onclick='showEquipment();'>
            <i class="fas fa-user-edit"></i><br>
            <span>Enregistrer equipement</span>
            </div>
            <div class="box personlBox" onclick='showPersonal();'>
            <i class="fas fa-user-plus"></i><br>
            <span>Enregistrer personal</span>
            </div>
            <div class="box maladeBox" onclick='showMalade();'>
            <i class="fas fa-user-check"></i><br>
            <span>Enregistrer malade</span>
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

      </div>
    </div>
  <!-- show data  -->

  <!-- query data  -->
    <!-- Table Des equipment  -->
<div class="container equipmentTable">


    <h2 class="text-center my-3">Table Des equipment 
      <?php
              echo $_SESSION["name"];
      ?> </h2>
    <ul class="responsive-table ">
      <li class="table-header">
        <div class="col col-1">Equipment Id</div>
        <div class="col col-2">type</div>
        <div class="col col-3">date Arrive</div>
        <div class="col col-3">Action</div>

      </li>
      <?php
        foreach($row as $supp){

        ?>
      <li class="table-row">
        <div class="col col-1" data-label="Equipment Id"><?= $supp['ide']; ?></div>
        <div class="col col-2" data-label="type"><?= $supp['type']; ?></div>
        <div class="col col-3" data-label="date Arrive"><?= $supp['dateArrive']; ?></div>
        <div class="col col-4" data-label="action">
          <button type="button" class="btn btn-danger delete mb-2" >Delete</button>
        </div>

      </li>
      <?php 
      }
      ?>

    </ul>
</div>
    <!-- Table Des equipment  -->

    <!-- Table Des person  -->
  <div class="container personalTable">
    <h2 class="text-center my-3">Table Des person 
      <?php
              echo $_SESSION["name"];
      ?> </h2>
    <ul class="responsive-table ">
      <li class="table-header">
        <div class="col col-1">person Id</div>
        <div class="col col-4">Nom</div>
        <div class="col col-4">Profil</div>
        <div class="col col-4">Action</div>

      </li>
      <?php
        foreach($row2 as $supp){

        ?>
      <li class="table-row">
        <div class="col col-1" data-label="person Id"><?= $supp['idp']; ?></div>
        <div class="col col-4" data-label="Nom"><?= $supp['Nom'] ." ". $supp['Prenom']; ?></div>
        <div class="col col-4" data-label="Profil"><?= $supp['Profil']; ?></div>
        <div class="col col-4" data-label="action">
          <button type="button" class="btn btn-danger delete mb-2" >Delete</button>
        </div>

      </li>
      <?php 
      }
      ?>

    </ul>
</div>
<!-- Table Des person  -->
    

        <!-- Table Des malade  -->
<div class="container maladeTable">

    <h2 class="text-center my-3">Table Des malade 
      <?php
              echo "Pour " .  $_SESSION["name"];
      ?> </h2>
    <ul class="responsive-table ">
      <li class="table-header">
        <div class="col col-1">Malade Id</div>
        <div class="col col-2">Nom</div>
        <div class="col col-4">age</div>
        <div class="col col-4">telephone</div>
        <div class="col col-4">action</div>

      </li>
      <?php
        foreach($row1 as $supp){

        ?>
      <li class="table-row">
        <div class="col col-1" data-label="Malade Id"><?= $supp['idm']; ?></div>
        <div class="col col-2" data-label="Nom"><?= $supp['nom'] ." ". $supp['Prenom'];  ?></div>
        <div class="col col-4" data-label="age"><?= $supp['age']; ?></div>
        <div class="col col-4" data-label="telephone"><?= $supp['telephone']; ?></div>
        <div class="col col-4" data-label="action">
          <button type="button" class="btn btn-danger delete mb-2" >Delete</button>
        </div>

      </li>
      <?php 
      }
      ?>

    </ul>
</div>
<!-- Table Des malade  -->
  <!-- query data  -->


  </section>

<?php

  $file_js = "footer.php";
  $js_file = "secretaire.js";
  include(__DIR__."./../../inc/".$file_js);
?>