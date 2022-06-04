<?php
  $title = "paramedical";
  $file = "header.php";
  $css_file = "secrecaitre.css";
  include(__DIR__."./../../inc/".$file);

  
  require_once '../../helpers/resulats.inc.php';



      // session_start();
	if(!isset($_SESSION['name'])){
		header("location:index.php");
	}

  $sql ="SELECT * FROM  malade WHERE idm = :idm ";
  $query = $db->prepare($sql);
  $query->bindParam(':idm',$id);
  $query->execute();
  $row = $query->fetchAll(PDO::FETCH_ASSOC);



?>

<section class="home-section">

    <div class="user_name">
    <i class="fas fa-file-download"></i>
    <span>Fiche technique Resulats</span>
    </div>
    <!-- fiche_clinique_data -->
    <div class="fiche_clinique_data">
    <div class="container">
      <h2 class="text-center my-3">Fiche technique Resulats </h2> 
    <ul class="list-group">
    <?php
      foreach($row as $malade){
    ?>
    <li class="list-group-item">Id :  <?= $malade['idm']?></li>
    <li class="list-group-item">Nom :  <?= $malade['nom'] ." " . $malade["Prenom"]?></li>
    <li class="list-group-item">Age : <?= $malade['age']?></li>
    <li class="list-group-item">Telephone : <?= $malade['telephone']?></li>
 
    <?php        
        }
    ?>
    </ul>
    <form action="" method="POST" class="my-3 py-4">
      <ul class="responsive-table my-3">
      <li class="table-header">
          <div class="col col-1">titre  </div>
          <div class="col col-2">Options</div>
        </li>
        <?php        
                 foreach($fiches as $fiche){

        ?>
        <li class="table-header">
          <div class="col col-1">examen de la face  </div>
          <div class="col col-2">Options</div>
        </li>
        <!-- examen de la face -->
            <!-- Symétrie -->

        <li class="table-row">
          <div class="col col-1" data-label="examen de la face">Symétrie</div>
          <div class="col col-2" data-label="Options">

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="symetrique" id="symetrique" value="symetrique">
                <label class="form-check-label" for="symetrique"><?= $fiche['symetrique']?></label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="Asymetrique" id="Asymetrique" value="Asymetrique">
                <label class="form-check-label" for="Asymetrique"><?= $fiche['asymetrique']?></label>
                </div>
          </div>
        </li>
        <!-- Symétrie -->
        <!-- Proportions verticales -->
        <li class="table-row">
          <div class="col col-1" data-label="examen de la face">Proportions verticales</div>
            <div class="col col-2" data-label="Options">

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="respectés" id="respectés" value="respectés">
                <label class="form-check-label" for="respectés"><?= $fiche['respecte']?></label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="augmenté" id="augmenté" value="Etage nasal augmenté ">
                <label class="form-check-label" for="augmenté"><?= $fiche['etage_nasal_augmante']?></label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="ena_diminue" id="ena_diminué" value="ena_diminué">
                <label class="form-check-label" for="ena_diminué"><?= $fiche['ena_diminue']?> </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="inférieur_augmenté" id="inférieur_augmenté" value="Etage inférieur  augmenté ">
                <label class="form-check-label" for="inférieur_augmenté"><?= $fiche['etage_inferieur_augmante']?> </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="eia_diminue" id="eia_diminué" value="eia_diminué ">
                <label class="form-check-label" for="eia_diminué"><?= $fiche['eia_diminue']?> </label>
                </div>
          </div>
        </li>
        <!-- Proportions verticales -->

           <!-- Profil sous nasal -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">Profil sous nasal</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="harmonieux" id="harmonieux" value="harmonieux">
                        <label class="form-check-label" for="harmonieux"><?= $fiche['harmonieux']?></label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="dyharmonieux" id="dyharmonieux" value="dyharmonieux">
                        <label class="form-check-label" for="dyharmonieux"><?= $fiche['dyharmonieux']?></label>
                        </div>
                </div>
        </li>
           <!-- Profil sous nasal -->

           <!-- profil mentonnier  -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">Profil mentonnier</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="orthofrontal" id="orthofrontal" value="orthofrontal">
                        <label class="form-check-label" for="orthofrontal"><?= $fiche['orthofrontal']?></label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="frontal" id="frontal" value="cis frontal">
                        <label class="form-check-label" for="frontal"><?= $fiche['cisfrontal']?></label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="transfrontal" id="transfrontal" value="transfrontal ">
                        <label class="form-check-label" for="transfrontal"><?= $fiche['transfrontal']?></label>
                        </div>
                </div>
        </li>
           <!-- Profil mentonnier -->
           <!-- profil des lèvres au repos  -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">Profil des lèvres au repos</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="présence_stomion" id="présence_stomion" value="présence de stomion">
                        <label class="form-check-label" for="présence_stomion"><?= $fiche['presence_stomion']?></label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="absence_stomion" id="absence_stomion" value="absence de stomion">
                        <label class="form-check-label" for="absence_stomion"><?= $fiche['absence_stomion']?></label>
                        </div>
                </div>
        </li>
           <!-- Profil des lèvres au repos -->
           <!-- posture des lèvres en fonction   -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">posture des lèvres en fonction</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="jointive_sans_contraction" id="jointive_sans_contraction" value="jointive sans contraction apparente">
                        <label class="form-check-label" for="jointive_sans_contraction"><?= $fiche['jointive_sans_contraction_apparente']?></label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="text" name="rapport" id="rapport" placeholder="rapport" value="<?= $fiche['rapport_anormal']?>" disabled>
                    </div>
        
                </div>
        </li>
           <!-- posture des lèvres en fonction -->
           <!-- chemin de fermeture -->
           <li class="table-row">
            <div class="col col-1" data-label="examen de la face">chemin de fermeture</div>
            <div class="col col-2" data-label="Options">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="droit" id="droit" value="droit">
                    <label class="form-check-label" for="droit"><?= $fiche['droit']?> </label>
                    </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="devié" id="devié" value="devié">
                    <label class="form-check-label" for="devié"><?= $fiche['devie']?> </label>
                    </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="douleurs" id="douleurs" value="bruit,:douleurs articulaires">
                    <label class="form-check-label" for="douleurs"><?= $fiche['bruit_douleurs_articulaires']?></label>
                    </div>
    
            </div>
        </li>
           <!-- chemin de fermeture -->

    <!-- examen de la face -->

    <!-- Examen fonctionnel  -->

    <li class="table-header">
          <div class="col col-1">Examen fonctionnel  </div>
          <div class="col col-2">Options</div>
    </li>
        <!-- examen de la face -->
            <!-- Posture de la langue au repos -->
        <li class="table-row">
          <div class="col col-1" data-label="examen de la face">Posture de la langue au repos</div>
          <div class="col col-2" data-label="Options">

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="circonscrite_rep" id="circonscrite_rep" value="circonscrite_rep">
                <label class="form-check-label" for="circonscrite_rep"><?= $fiche['circonscrite']?></label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="anterieure_rep" id="anterieure_rep" value="Interposition  anterieure-_rep ">
                <label class="form-check-label" for="anterieure_rep"><?= $fiche['anterieurer']?> </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="laterale_rep" id="laterale_rep" value="laterale_rep  ">
                <label class="form-check-label" for="laterale_rep"><?= $fiche['lateraler']?> </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="totale_rep" id="totale_rep " value="totale_rep ">
                <label class="form-check-label" for="totale_rep"><?= $fiche['totaler']?>  </label>
                </div>
          </div>
        </li>
        <!-- Posture de la langue au repos -->
        <!-- Posture de la langue en fonction -->
        <li class="table-row">
          <div class="col col-1" data-label="examen de la face">Posture de la langue en fonction</div>
            <div class="col col-2" data-label="Options">

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="circonscrite" id="circonscrite" value="circonscrite_fct">
                <label class="form-check-label" for="circonscrite"><?= $fiche['circonscritef']?> </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="anterieure_fct" id="anterieure_fct" value="Interposition  anterieure-fct ">
                <label class="form-check-label" for="anterieure_fct"><?= $fiche['anterieuref']?>  </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="laterale_fct" id="laterale_fct" value="laterale_fct">
                <label class="form-check-label" for="laterale_fct"><?= $fiche['lateralef']?>   </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="totale_fct" id="totale_fct" value="totale_fct">
                <label class="form-check-label" for="totale_fct"><?= $fiche['totalef']?>   </label>
                </div>
    
          </div>
        </li>
        <!-- Posture de la langue en fonction -->

           <!-- Posture de la tete  et du corps -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">Posture de la tete  et du corps</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="anomalie" id="anomalie" value="aucune anomalie visible">
                        <label class="form-check-label" for="anomalie"><?= $fiche['aucune_anomalie_visible']?> </label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="text" name="decrire_toute_anomalie" id="decrire_toute_anomalie" value="<?= $fiche['decrire_anomalie']?>" disabled >
                    </div>

                </div>
        </li>
           <!-- Posture de la tete  et du corps -->

           <!-- ventilation  -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">ventilation</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="narinaires" id="narinaires" value="orifices narinaires arrondies">
                        <label class="form-check-label" for="narinaires"><?= $fiche['orifices_narinaires_arrondies']?> </label>
                    </div>
                    <div class="form-check form-check-inline">
                          <input class="form-check-input" type="hidden" name="unilateral_D" id="unilateral_D" value="retrecit unilateral D">
                          <label class="form-check-label" for="unilateral_D"><?= $fiche['retrecit_unilaterald']?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="unilateral_G" id="unilateral_G" value="retrecit unilateral G">
                        <label class="form-check-label" for="unilateral_G"><?= $fiche['retrecit_unilateraleg']?> </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="rétrécissement_symétrique" id="symétrique" value="rétrécissement symétrique">
                        <label class="form-check-label" for="symétrique"> <?= $fiche['retrecissement_symetrique']?></label>
                    </div>
                </div>
        </li>
           <!-- ventilation -->

           <!-- mastication   -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">mastication</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="unilaterale_alternée" id="alternée" value="unilaterale alternée">
                        <label class="form-check-label" for="alternée"><?= $fiche['unilaterale_alternee']?></label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="hidden" name="unilaterale_dominante" id="dominante" value="unilaterale dominante">
                          <label class="form-check-label" for="dominante"><?= $fiche['unilaterale_dominante']?></label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="hidden" name="masseterine" id="masseterine" value="masseterine ">
                          <label class="form-check-label" for="masseterine"><?= $fiche['masseterine']?></label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="hidden" name="temporale" id="temporale" value="temporale">
                          <label class="form-check-label" for="temporale"><?= $fiche['temporale']?></label>
                        </div>
                </div>
        </li>
           <!-- mastication -->
           <!-- phonation  -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">phonation</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="palatales" id="palatales" value="les  palatales normales">
                        <label class="form-check-label" for="palatales"><?= $fiche['les_palatales_normales']?> </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="anomaliep" id="anomaliep" value="anomaliep">
                        <label class="form-check-label" for="anomaliep"><?= $fiche['anomaliep']?> </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="sibilantes" id="sibilantes" value="les sibilantes normales ">
                        <label class="form-check-label" for="sibilantes"><?= $fiche['sibilantes_normales']?>  </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="anomalies" id="anomalies" value="anomalies">
                        <label class="form-check-label" for="anomalies"><?= $fiche['anomalies']?>   </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="chuintantes" id="chuintantes" value="les chuintantes normales">
                        <label class="form-check-label" for="chuintantes"><?= $fiche['chuintantes_normales']?> </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="anomaliec" id="anomaliec" value="anomaliec">
                        <label class="form-check-label" for="anomaliec"><?= $fiche['anomaliec']?>  </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="fricatives" id="fricatives" value="les fricatives normales">
                        <label class="form-check-label" for="fricatives"><?= $fiche['fricatives_normales']?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="hidden" name="anomalief" id="anomalief" value="anomalief">
                        <label class="form-check-label" for="anomalief"><?= $fiche['anomalief']?></label>
                    </div>
        
                </div>
        </li>
           <!-- phonation -->
           <!-- para fonction -->
           <li class="table-row">
            <div class="col col-1" data-label="examen de la face">para fonction</div>
            <div class="col col-2" data-label="Options">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="succion_digitale" id="inlinecheckbox1" value="succion_digitale">
                    <label class="form-check-label" for="succion_digitale"><?= $fiche['succion_digitale']?> </label>
                    </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="tétée" id="tétée" value="tétée">
                    <label class="form-check-label" for="tétée"><?= $fiche['tetee']?> </label>
                    </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="bruxisme" id="bruxisme" value="bruxisme">
                    <label class="form-check-label" for="bruxisme"><?= $fiche['bruxisme']?></label>
                    </div>
    
            </div>
        </li>
           <!-- para fonction -->
    <!-- examen de la face -->


 <!-- Examen de la denture  -->

    <li class="table-header">
              <div class="col col-1">Examen de la denture  </div>
              <div class="col col-2">Options</div>
      </li>
            <!-- examen de la face -->
                <!-- Rapport du sens vertical-->
            <li class="table-row">
              <div class="col col-1" data-label="examen de la face">Rapport du sens vertical</div>
              <div class="col col-2" data-label="Options">

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="normalb" id="normalb" value="normalb ">
                    <label class="form-check-label" for="normalb"><?= $fiche['obnormal']?> </label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="Augmentéb" id="Augmentéb" value="Augmentéb ">
                    <label class="form-check-label" for="Augmentéb "><?= $fiche['ob_augmante']?></label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="Diminuéb" id="Diminuéb " value="Diminuéb  ">
                    <label class="form-check-label" for="Diminuéb"><?= $fiche['ob_diminue']?> </label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="normalj" id="normalj" value="normalj">
                    <label class="form-check-label" for="normalj"><?= $fiche['oj_normal']?></label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="Augmentéj" id="Augmentéj" value="Augmentéj">
                    <label class="form-check-label" for="Augmentéj"><?= $fiche['oj_augmante']?></label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="hidden" name="Diminuéj" id="Diminuéj" value="Diminuéj  ">
                    <label class="form-check-label" for="Diminuéj"><?= $fiche['oj_diminue']?>  </label>
                    </div>
              </div>
            </li>
            <!-- Rapport du sens vertical -->
            <!-- Rapport du sens transversal -->
            <li class="table-row">
              <div class="col col-1" data-label="examen de la face">Rapport du sens transversal</div>
                <div class="col col-2" data-label="Options">

                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="hidden" name="mincisif" id="mincisif" value="médian incisif respecté">
                      <label class="form-check-label" for="mincisif"><?= $fiche['oj_diminue']?> </label>
                  </div>
                  <div class="form-control ">
                        <input class="form-control" type="text" name="exp5" id="exp5" placeholder="exp " value="<?= $fiche['exp5']?>" disabled>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="hidden" name="non_respectée" id="non respectée " value="non respectée  ">
                      <label class="form-check-label" for="anterieure-fct"><?= $fiche['oj_diminue']?></label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="text" name="exp1" id="exp1" placeholder="exp1" value="<?= $fiche['exp1']?>" disabled>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="hidden" name="molaire_engrenante" id="molaire_engrenante" value="molaire_engrenante">
                      <label class="form-check-label" for="molaire_engrenante"><?= $fiche['oj_diminue']?> </label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="text" name="exp2" id="exp2" placeholder="exp2" value="<?= $fiche['exp2']?>" disabled>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="hidden" name="bout" id="bout" value="bout">
                      <label class="form-check-label" for="bout"><?= $fiche['oj_diminue']?></label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="text" name="exp3" id="exp3"  value="<?= $fiche['exp3']?>" disabled>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="hidden" name="occlusion_inversée" id="occlusion_inversée" value="occlusion_inversée">
                      <label class="form-check-label" for="occlusion_inversée"></label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="text" name="exp4" id="exp4" value="<?= $fiche['exp4']?>" disabled>
                    </div>
        
              </div>
            </li>
            <!-- Rapport du sens transversal -->

              <!-- rapport du sens sagittal  -->
              <li class="table-row">
                    <div class="col col-1" data-label="examen de la face">rapport du sens sagittal</div>
                    <div class="col col-2" data-label="Options">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="cl_l_symetrique" id="cl_l_symetrique" value="classe d’angle  canines cl l symetrique">
                            <label class="form-check-label" for="cl_l_symetrique"><?= $fiche['cl_l_symetrique']?> </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="cl_l_asymetrique" id="cl_l_asymetrique" value="classe d’angle  canines cl l asymetrique">
                            <label class="form-check-label" for="cl_l_asymetrique"><?= $fiche['cl_l_asymetrique']?> </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="cl_ll_asymetrique" id="cl_ll_symetrique" value="cl ll symetrique">
                            <label class="form-check-label" for="cl_ll_symetrique"><?= $fiche['cl_ll_asymetrique']?> </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="cl_ll_asymetrique" id="cl_ll_asymetrique" value="cl ll asymetrique">
                            <label class="form-check-label" for="cl_ll_asymetrique"><?= $fiche['cl_ll_asymetrique']?> </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="cl_lll_symetrique" id="cl_lll_symetrique" value="cl lll symetrique">
                            <label class="form-check-label" for="cl_lll_symetrique"><?= $fiche['cl_lll_symetrique']?> </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="cl_lll_asymetrique" id="cl_lll_asymetrique" value="cl ll asymetrique">
                            <label class="form-check-label" for="cl_lll_asymetrique"><?= $fiche['cl_lll_asymetrique']?> </label>
                        </div>

                    </div>
            </li>
              <!-- rapport du sens sagittal  -->

              <!-- classe d’angle  canines     -->
              <li class="table-row">
                    <div class="col col-1" data-label="examen de la face">classe d’angle canines</div>
                    <div class="col col-2" data-label="Options">
                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="hidden" name="cl_l_symetriquec" id="cl_l_symetriquec" value="cl l symetriquec">
                              <label class="form-check-label" for="cl_l_symetriquec"> <?= $fiche['cl_l_asymetriquec']?>  </label>
                          </div>

                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="hidden" name="cl_l_asymetriquec" id="cl_l_asymetriquec" value="cl l asymetriquec">
                              <label class="form-check-label" for="cl_l_sumetriquec"><?= $fiche['cl_l_asymetriquec']?> </label>
                      </div>
                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="hidden" name="cl_ll_symetriquec" id="cl_ll_symetriquec" value="cl l symetriquec">
                              <label class="form-check-label" for="cl_ll_symetriquec"><?= $fiche['cl_ll_symetriquec']?>  </label>
                      </div>
                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="hidden" name="cl_ll_asymetriquec" id="cl_ll_asymetriquec" value="cl ll asymetriquec">
                              <label class="form-check-label" for="cl_ll_asymetriquec"><?= $fiche['cl_ll_asymetriquec']?>  </label>
                      </div>
                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="hidden" name="cl_lll_symetriquec" id="cl_lll_symetriquec" value="cl lll symetriquec">
                              <label class="form-check-label" for="cl_lll_symetriquec"><?= $fiche['cl_lll_symetriquec']?>  </label>
                      </div>
                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="hidden" name="cl_lll_asymetriquec" id="cl_lll_asymetriquec" value="cl lll asymetriquec">
                              <label class="form-check-label" for="cl_lll_asymetriquec"><?= $fiche['cl_lll_asymetriquec']?> </label>
                      </div>
                        
                    </div>
            </li>
              <!-- classe d’angle  canines    -->

              <!-- classe d’angle  molaire    -->
              <li class="table-row">
                    <div class="col col-1" data-label="examen de la face">mastication</div>
                    <div class="col col-2" data-label="Options">
                      <div class="form-check form-check-inline">
                                <input class="form-check-input" type="hidden" name="cl_l_symetriquem" id="cl_l_symetriquem" value="cl l symetriquem">
                                <label class="form-check-label" for="cl_l_symetriquem"><?= $fiche['cl_l_asymetriquem']?>  </label>
                    </div>

                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="hidden" name="cl_l_asymetriquem" id="cl_l_asymetriquem" value="cl l asymetriquem">
                                <label class="form-check-label" for="cl_l_sumetriquem"><?= $fiche['cl_l_asymetriquem']?>  </label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="hidden" name="cl_ll_symetriquem" id="cl_ll_symetriquem" value="cl ll symetriquem">
                                <label class="form-check-label" for="cl_ll_symetriquem"><?= $fiche['cl_ll_asymetriquem']?>  </label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="hidden" name="cl_ll_asymetriquem" id="cl_ll_asymetriquem" value="cl lll asymetriquem">
                                <label class="form-check-label" for="cl_ll_asymetriquem"><?= $fiche['cl_ll_asymetriquem']?>  </label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="hidden" name="cl_lll_symetriquem" id="cl_lll_symetriquem" value="cl lll symetriquem">
                                <label class="form-check-label" for="cl_lll_symetriquem"><?= $fiche['cl_lll_asymetriquem']?>  </label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="hidden" name="cl_lll_asymetriquem" id="cl_lll_asymetriquem" value="cl lll asymetriquem">
                                <label class="form-check-label" for="cl_lll_asymetriquem"><?= $fiche['cl_lll_asymetriquem']?>  </label>
                        </div>
                      
                        
                    </div>
            </li>
              <!-- classe d’angle  molaire  -->
              <!-- examen des fonctions occlusales  -->
              <li class="table-row">
                    <div class="col col-1" data-label="examen de la face">examen des fonctions occlusales</div>
                    <div class="col col-2" data-label="Options">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="protrusion" id="protrusion" value="protrusion  respectée">
                            <label class="form-check-label" for="protrusion"><?= $fiche['protrusion_respecte']?></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="non_respectée" id="non_respectée" value="non respectée">
                            <label class="form-check-label" for="non_respectée"><?= $fiche['non_respectee']?> </label>
                        </div>
                        <div class="form-control ">
                        <input class="form-control" type="input" name="expp" id="expp" placeholder="expp" value="<?= $fiche['expp']?>" disabled>
                    </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="latéralité_D_canine" id="latéralité_D_canine" value="latéralité D canine">
                            <label class="form-check-label" for="latéralité_D_canine"><?= $fiche['canine']?></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="antero_latéraled" id="antero_latéraled" value="antero latéraled">
                            <label class="form-check-label" for="antero_latéraled"><?= $fiche['antero_lateraled']?> </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="grouped" id="grouped" value="grouped ">
                            <label class="form-check-label" for="grouped"><?= $fiche['grouped']?> </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="interférenced" id="interférenced" value="interférenced"  >
                            <label class="form-check-label" for="interférenced "><?= $fiche['interferenced']?> </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="antero_latéraleg" id="antero_latéraleg" value="latéralité G antero latéraleg">
                            <label class="form-check-label" for="antero_latéraleg"><?= $fiche['antero_lateraleg']?></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="groupeg" id="groupeg" value="groupeg ">
                            <label class="form-check-label" for="groupeg"><?= $fiche['groupeg']?></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="hidden" name="interférenceg" id="interférenceg" value="interférenceg">
                            <label class="form-check-label" for="interférenceg "><?= $fiche['interferenceg']?></label>
                        </div>
            
                    </div>
            </li>
           <!-- examen des fonctions occlusales -->
    <!-- Examen de la denture  -->

    <?php        
         }
    ?>
      </ul>
    </form>
  </div>
    </div>
    <!-- fiche_clinique_data -->
</section>






<?php

  $file_js = "footer.php";
  $js_file = "secretaire.js";
  include(__DIR__."./../../inc/".$file_js);
?>