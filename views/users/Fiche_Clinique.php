<?php
  $title = "paramedical";
  $file = "header.php";
  $css_file = "secrecaitre.css";
  include(__DIR__."./../../inc/".$file);

  require_once '../../helpers/Fiche_Clinique.inc.php';

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
    <span>Fiche Clinique</span>
    </div>
    <!-- fiche_clinique_data -->
    <div class="fiche_clinique_data">
    <div class="container">
      <h2 class="text-center my-3">Remplir Fiche technique </h2> 
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
    <li class="list-group-item"><a href="resualts.php?id=<?=$id?>">Show fiche technique Resulats</a></li>
    </ul>
    <form action="" method="POST" class="my-3 py-4">
      <ul class="responsive-table my-3">
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
                <input class="form-check-input" type="checkbox" name="symetrique" id="symetrique" value="symetrique">
                <label class="form-check-label" for="symetrique">symétrique</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="Asymetrique" id="Asymetrique" value="Asymetrique">
                <label class="form-check-label" for="Asymetrique">Asymetrique</label>
                </div>
          </div>
        </li>
        <!-- Symétrie -->
        <!-- Proportions verticales -->
        <li class="table-row">
          <div class="col col-1" data-label="examen de la face">Proportions verticales</div>
            <div class="col col-2" data-label="Options">

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="respectés" id="respectés" value="respectés">
                <label class="form-check-label" for="respectés">respectés</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="augmenté" id="augmenté" value="Etage nasal augmenté ">
                <label class="form-check-label" for="augmenté">Etage nasal augmenté </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="ena_diminue" id="ena_diminué" value="ena_diminué">
                <label class="form-check-label" for="ena_diminué">ena-diminué </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="inférieur_augmenté" id="inférieur_augmenté" value="Etage inférieur  augmenté ">
                <label class="form-check-label" for="inférieur_augmenté">Etage inférieur  augmenté </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="eia_diminue" id="eia_diminué" value="eia_diminué ">
                <label class="form-check-label" for="eia_diminué">eia_diminué </label>
                </div>
          </div>
        </li>
        <!-- Proportions verticales -->

           <!-- Profil sous nasal -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">Profil sous nasal</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="harmonieux" id="harmonieux" value="harmonieux">
                        <label class="form-check-label" for="harmonieux">harmonieux</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="dyharmonieux" id="dyharmonieux" value="dyharmonieux">
                        <label class="form-check-label" for="dyharmonieux">Dyharmonieux</label>
                        </div>
                </div>
        </li>
           <!-- Profil sous nasal -->

           <!-- profil mentonnier  -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">Profil mentonnier</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="orthofrontal" id="orthofrontal" value="orthofrontal">
                        <label class="form-check-label" for="orthofrontal">orthofrontal</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="frontal" id="frontal" value="cis frontal">
                        <label class="form-check-label" for="frontal">cis frontal</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="transfrontal" id="transfrontal" value="transfrontal ">
                        <label class="form-check-label" for="transfrontal">transfrontal</label>
                        </div>
                </div>
        </li>
           <!-- Profil mentonnier -->
           <!-- profil des lèvres au repos  -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">Profil des lèvres au repos</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="présence_stomion" id="présence_stomion" value="présence de stomion">
                        <label class="form-check-label" for="présence_stomion">présence de stomion</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="absence_stomion" id="absence_stomion" value="absence de stomion">
                        <label class="form-check-label" for="absence_stomion">absence de stomion</label>
                        </div>
                </div>
        </li>
           <!-- Profil des lèvres au repos -->
           <!-- posture des lèvres en fonction   -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">posture des lèvres en fonction</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="jointive_sans_contraction" id="jointive_sans_contraction" value="jointive sans contraction apparente">
                        <label class="form-check-label" for="jointive_sans_contraction">jointive sans contraction apparente</label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="input" name="rapport" id="rapport" placeholder="rapport">
                    </div>
        
                </div>
        </li>
           <!-- posture des lèvres en fonction -->
           <!-- chemin de fermeture -->
           <li class="table-row">
            <div class="col col-1" data-label="examen de la face">chemin de fermeture</div>
            <div class="col col-2" data-label="Options">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="droit" id="droit" value="droit">
                    <label class="form-check-label" for="droit">droit </label>
                    </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="devié" id="devié" value="devié">
                    <label class="form-check-label" for="devié">devié </label>
                    </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="douleurs" id="douleurs" value="bruit,:douleurs articulaires">
                    <label class="form-check-label" for="douleurs">bruit,douleurs articulaires</label>
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
                <input class="form-check-input" type="checkbox" name="circonscrite_rep" id="circonscrite_rep" value="circonscrite_rep">
                <label class="form-check-label" for="circonscrite_rep">circonscrite-rep</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="anterieure_rep" id="anterieure_rep" value="Interposition  anterieure-_rep ">
                <label class="form-check-label" for="anterieure_rep">Interposition  anterieure_rep </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="laterale_rep" id="laterale_rep" value="laterale_rep  ">
                <label class="form-check-label" for="laterale_rep">laterale-rep </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="totale_rep" id="totale_rep " value="totale_rep ">
                <label class="form-check-label" for="totale_rep">totale_rep  </label>
                </div>
          </div>
        </li>
        <!-- Posture de la langue au repos -->
        <!-- Posture de la langue en fonction -->
        <li class="table-row">
          <div class="col col-1" data-label="examen de la face">Posture de la langue en fonction</div>
            <div class="col col-2" data-label="Options">

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="circonscrite" id="circonscrite" value="circonscrite_fct">
                <label class="form-check-label" for="circonscrite">circonscrite_fct</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="anterieure_fct" id="anterieure_fct" value="Interposition  anterieure-fct ">
                <label class="form-check-label" for="anterieure_fct">Interposition  anterieure-fct </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="laterale_fct" id="laterale_fct" value="laterale_fct">
                <label class="form-check-label" for="laterale_fct">laterale-fct  </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="totale_fct" id="totale_fct" value="totale_fct">
                <label class="form-check-label" for="totale_fct">totale-fct  </label>
                </div>
    
          </div>
        </li>
        <!-- Posture de la langue en fonction -->

           <!-- Posture de la tete  et du corps -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">Posture de la tete  et du corps</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="anomalie" id="anomalie" value="aucune anomalie visible">
                        <label class="form-check-label" for="anomalie">aucune anomalie visible</label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="input" name="decrire_toute_anomalie" id="decrire_toute_anomalie" placeholder="decrire toute anomalie ">
                    </div>

                </div>
        </li>
           <!-- Posture de la tete  et du corps -->

           <!-- ventilation  -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">ventilation</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="narinaires" id="narinaires" value="orifices narinaires arrondies">
                        <label class="form-check-label" for="narinaires">orifices narinaires arrondies </label>
                    </div>
                    <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="unilateral_D" id="unilateral_D" value="retrecit unilateral D">
                          <label class="form-check-label" for="unilateral_D">retrecit unilateral D</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="unilateral_G" id="unilateral_G" value="retrecit unilateral G">
                        <label class="form-check-label" for="unilateral_G"> retrecit unilateral G</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="rétrécissement_symétrique" id="symétrique" value="rétrécissement symétrique">
                        <label class="form-check-label" for="symétrique"> rétrécissement symétrique</label>
                    </div>
                </div>
        </li>
           <!-- ventilation -->

           <!-- mastication   -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">mastication</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="unilaterale_alternée" id="alternée" value="unilaterale alternée">
                        <label class="form-check-label" for="alternée">unilaterale alternée</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="unilaterale_dominante" id="dominante" value="unilaterale dominante">
                          <label class="form-check-label" for="dominante">unilaterale dominante</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="masseterine" id="masseterine" value="masseterine ">
                          <label class="form-check-label" for="masseterine">masseterine</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" name="temporale" id="temporale" value="temporale">
                          <label class="form-check-label" for="temporale">temporale</label>
                        </div>
                </div>
        </li>
           <!-- mastication -->
           <!-- phonation  -->
           <li class="table-row">
                <div class="col col-1" data-label="examen de la face">phonation</div>
                <div class="col col-2" data-label="Options">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="palatales" id="palatales" value="les  palatales normales">
                        <label class="form-check-label" for="palatales">les  palatales normales </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="anomaliep" id="anomaliep" value="anomaliep">
                        <label class="form-check-label" for="anomaliep">anomaliep </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="sibilantes" id="sibilantes" value="les sibilantes normales ">
                        <label class="form-check-label" for="sibilantes">les sibilantes normales  </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="anomalies" id="anomalies" value="anomalies">
                        <label class="form-check-label" for="anomalies">anomalies   </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="chuintantes" id="chuintantes" value="les chuintantes normales">
                        <label class="form-check-label" for="chuintantes">les chuintantes normales </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="anomaliec" id="anomaliec" value="anomaliec">
                        <label class="form-check-label" for="anomaliec">anomaliec  </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="fricatives" id="fricatives" value="les fricatives normales">
                        <label class="form-check-label" for="fricatives">les fricatives normales</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="anomalief" id="anomalief" value="anomalief">
                        <label class="form-check-label" for="anomalief">anomalief</label>
                    </div>
        
                </div>
        </li>
           <!-- phonation -->
           <!-- para fonction -->
           <li class="table-row">
            <div class="col col-1" data-label="examen de la face">para fonction</div>
            <div class="col col-2" data-label="Options">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="succion_digitale" id="inlinecheckbox1" value="succion_digitale">
                    <label class="form-check-label" for="succion_digitale">succion digitale </label>
                    </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tétée" id="tétée" value="tétée">
                    <label class="form-check-label" for="tétée">tétée </label>
                    </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="bruxisme" id="bruxisme" value="bruxisme">
                    <label class="form-check-label" for="bruxisme">bruxisme</label>
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
                    <input class="form-check-input" type="checkbox" name="normalb" id="normalb" value="normalb ">
                    <label class="form-check-label" for="normalb">normalb </label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="Augmentéb" id="Augmentéb" value="Augmentéb ">
                    <label class="form-check-label" for="Augmentéb ">Augmentéb</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="Diminuéb" id="Diminuéb " value="Diminuéb  ">
                    <label class="form-check-label" for="Diminuéb">Diminuéb </label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="normalj" id="normalj" value="normalj">
                    <label class="form-check-label" for="normalj">normalj</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="Augmentéj" id="Augmentéj" value="Augmentéj">
                    <label class="form-check-label" for="Augmentéj">Augmentéj</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="Diminuéj" id="Diminuéj" value="Diminuéj  ">
                    <label class="form-check-label" for="Diminuéj">Diminuéj  </label>
                    </div>
              </div>
            </li>
            <!-- Rapport du sens vertical -->
            <!-- Rapport du sens transversal -->
            <li class="table-row">
              <div class="col col-1" data-label="examen de la face">Rapport du sens transversal</div>
                <div class="col col-2" data-label="Options">

                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="mincisif" id="mincisif" value="médian incisif respecté">
                      <label class="form-check-label" for="mincisif">médian incisif respecté </label>
                  </div>
                  <div class="form-control ">
                        <input class="form-control" type="input" name="exp5" id="exp5" placeholder="exp ">
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="non_respectée" id="non respectée " value="non respectée  ">
                      <label class="form-check-label" for="anterieure-fct">non respectée</label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="input" name="exp1" id="exp1" placeholder="exp1">
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="molaire_engrenante" id="molaire_engrenante" value="molaire_engrenante">
                      <label class="form-check-label" for="molaire_engrenante">Occlusion molaire engrenante </label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="input" name="exp2" id="exp2" placeholder="exp2">
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="bout" id="bout" value="bout">
                      <label class="form-check-label" for="bout">bout à bout</label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="input" name="exp3" id="exp3" placeholder="exp3 ">
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="occlusion_inversée" id="occlusion_inversée" value="occlusion_inversée">
                      <label class="form-check-label" for="occlusion_inversée">occlusion inversée</label>
                    </div>
                    <div class="form-control ">
                        <input class="form-control" type="input" name="exp4" id="exp4" placeholder="exp4">
                    </div>
        
              </div>
            </li>
            <!-- Rapport du sens transversal -->

              <!-- rapport du sens sagittal  -->
              <li class="table-row">
                    <div class="col col-1" data-label="examen de la face">rapport du sens sagittal</div>
                    <div class="col col-2" data-label="Options">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="cl_l_symetrique" id="cl_l_symetrique" value="classe d’angle  canines cl l symetrique">
                            <label class="form-check-label" for="cl_l_symetrique">classe d’angle  canines cl l symetrique </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="cl_l_asymetrique" id="cl_l_asymetrique" value="classe d’angle  canines cl l asymetrique">
                            <label class="form-check-label" for="cl_l_asymetrique">classe d’angle  canines cl l asymetrique </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="cl_ll_asymetrique" id="cl_ll_symetrique" value="cl ll symetrique">
                            <label class="form-check-label" for="cl_ll_symetrique">cl ll symetrique </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="cl_ll_asymetrique" id="cl_ll_asymetrique" value="cl ll asymetrique">
                            <label class="form-check-label" for="cl_ll_asymetrique">cl ll asymetrique </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="cl_lll_symetrique" id="cl_lll_symetrique" value="cl lll symetrique">
                            <label class="form-check-label" for="cl_lll_symetrique">cl lll symetrique </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="cl_lll_asymetrique" id="cl_lll_asymetrique" value="cl ll asymetrique">
                            <label class="form-check-label" for="cl_lll_asymetrique">cl lll asymetrique </label>
                        </div>

                    </div>
            </li>
              <!-- rapport du sens sagittal  -->

              <!-- classe d’angle  canines     -->
              <li class="table-row">
                    <div class="col col-1" data-label="examen de la face">classe d’angle canines</div>
                    <div class="col col-2" data-label="Options">
                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" name="cl_l_symetriquec" id="cl_l_symetriquec" value="cl l symetriquec">
                              <label class="form-check-label" for="cl_l_symetriquec"> cl l symetriquec </label>
                          </div>

                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" name="cl_l_asymetriquec" id="cl_l_asymetriquec" value="cl l asymetriquec">
                              <label class="form-check-label" for="cl_l_sumetriquec">cl l asymetriquec </label>
                      </div>
                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" name="cl_ll_symetriquec" id="cl_ll_symetriquec" value="cl l symetriquec">
                              <label class="form-check-label" for="cl_ll_symetriquec">cl II symetriquec </label>
                      </div>
                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" name="cl_ll_asymetriquec" id="cl_ll_asymetriquec" value="cl ll asymetriquec">
                              <label class="form-check-label" for="cl_ll_asymetriquec">cl ll asymetriquec </label>
                      </div>
                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" name="cl_lll_symetriquec" id="cl_lll_symetriquec" value="cl lll symetriquec">
                              <label class="form-check-label" for="cl_lll_symetriquec">cl lll symetriquec </label>
                      </div>
                      <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" name="cl_lll_asymetriquec" id="cl_lll_asymetriquec" value="cl lll asymetriquec">
                              <label class="form-check-label" for="cl_lll_asymetriquec">cl lll asymetriquec </label>
                      </div>
                        
                    </div>
            </li>
              <!-- classe d’angle  canines    -->

              <!-- classe d’angle  molaire    -->
              <li class="table-row">
                    <div class="col col-1" data-label="examen de la face">mastication</div>
                    <div class="col col-2" data-label="Options">
                      <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="cl_l_symetriquem" id="cl_l_symetriquem" value="cl l symetriquem">
                                <label class="form-check-label" for="cl_l_symetriquem">cl l symetriquem </label>
                    </div>

                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="cl_l_asymetriquem" id="cl_l_asymetriquem" value="cl l asymetriquem">
                                <label class="form-check-label" for="cl_l_sumetriquem">cl l asymetriquem </label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="cl_ll_symetriquem" id="cl_ll_symetriquem" value="cl ll symetriquem">
                                <label class="form-check-label" for="cl_ll_symetriquem">cl ll symetriquem </label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="cl_ll_asymetriquem" id="cl_ll_asymetriquem" value="cl lll asymetriquem">
                                <label class="form-check-label" for="cl_ll_asymetriquem">cl ll asymetriquem </label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="cl_lll_symetriquem" id="cl_lll_symetriquem" value="cl lll symetriquem">
                                <label class="form-check-label" for="cl_lll_symetriquem">cl lll symetriquem </label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="cl_lll_asymetriquem" id="cl_lll_asymetriquem" value="cl lll asymetriquem">
                                <label class="form-check-label" for="cl_lll_asymetriquem">cl lll asymetriquem </label>
                        </div>
                      
                        
                    </div>
            </li>
              <!-- classe d’angle  molaire  -->
              <!-- examen des fonctions occlusales  -->
              <li class="table-row">
                    <div class="col col-1" data-label="examen de la face">examen des fonctions occlusales</div>
                    <div class="col col-2" data-label="Options">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="protrusion" id="protrusion" value="protrusion  respectée">
                            <label class="form-check-label" for="protrusion">protrusion  respectée</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="non_respectée" id="non_respectée" value="non respectée">
                            <label class="form-check-label" for="non_respectée">non respectée </label>
                        </div>
                        <div class="form-control ">
                        <input class="form-control" type="input" name="expp" id="expp" placeholder="expp">
                    </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="latéralité_D_canine" id="latéralité_D_canine" value="latéralité D canine">
                            <label class="form-check-label" for="latéralité_D_canine">llatéralité D canine</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="antero_latéraled" id="antero_latéraled" value="antero latéraled">
                            <label class="form-check-label" for="antero_latéraled">antero latéraled </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="grouped" id="grouped" value="grouped ">
                            <label class="form-check-label" for="grouped">grouped </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="interférenced" id="interférenced" value="interférenced"  >
                            <label class="form-check-label" for="interférenced ">interférenced </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="antero_latéraleg" id="antero_latéraleg" value="latéralité G antero latéraleg">
                            <label class="form-check-label" for="antero_latéraleg">latéralité G antero latéraleg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="groupeg" id="groupeg" value="groupeg ">
                            <label class="form-check-label" for="groupeg">groupeg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="interférenceg" id="interférenceg" value="interférenceg">
                            <label class="form-check-label" for="interférenceg ">interférenceg</label>
                        </div>
            
                    </div>
            </li>
           <!-- examen des fonctions occlusales -->
    <!-- Examen de la denture  -->
      </ul>

      <button type="submit" class="btn btn-primary" name="submit_ficher">Send Fiche</button>
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