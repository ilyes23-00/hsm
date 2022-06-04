<?php
// error_reporting(0);

require_once 'conn.php'; //connect data base

$id = $_GET['id']; 


if(isset($_REQUEST["submit_ficher"])){
    // symétrique
    $symetrique = $_REQUEST["symetrique"];
    $Asymetrique = $_REQUEST["Asymetrique"];
    // symétrique

    // Proportions verticales
    $respectés = $_REQUEST["respectés"];
    $augmenté = $_REQUEST["augmenté"];
    $inférieur_augmenté = $_REQUEST["inférieur_augmenté"];
    $ena_diminué  = $_REQUEST["ena_diminue"];
    $eia_diminué = $_REQUEST["eia_diminue"];

    // // Proportions verticales

    // // Profil sous nasal
     $harmonieux = $_REQUEST["harmonieux"];
     $Dyharmonieux = $_REQUEST["dyharmonieux"];
    // // Profil sous nasal

    // // Profil mentonnier
    $orthofrontal = $_REQUEST["orthofrontal"];
    $frontal = $_REQUEST["frontal"];
    $transfrontal = $_REQUEST["transfrontal"];
    // // Profil mentonnier

    // // profil des lèvres au repos
     $présence_stomion = $_REQUEST["présence_stomion"];
     $absence_stomion = $_REQUEST["absence_stomion"];
    // // profil des lèvres au repos

    // // posture des lèvres en fonction
    $jointive_sans_contraction = $_REQUEST["jointive_sans_contraction"];
    $rapport = $_REQUEST["rapport"];
    // // posture des lèvres en fonction

    // // chemin de fermeture
    $droit = $_REQUEST["droit"];
    $devié = $_REQUEST["devié"];
    $douleurs = $_REQUEST["douleurs"];
    // // chemin de fermeture

    // // Posture de la langue au repos
    $circonscrite_rep = $_REQUEST["circonscrite_rep"];
    $anterieure_rep = $_REQUEST["anterieure_rep"];
    $laterale_rep = $_REQUEST["laterale_rep"];
    $totale_rep = $_REQUEST["totale_rep"];
    // // Posture de la langue au repos

    // // Posture de la langue en fonction
    $circonscrite = $_REQUEST["circonscrite"];
    $anterieure_fct = $_REQUEST["anterieure_fct"];
    $laterale_fct = $_REQUEST["laterale_fct"];
    $totale_fct = $_REQUEST["totale_fct"];
    // // Posture de la langue en fonction

    // // Posture de la tete  et du corps
    $anomalie = $_REQUEST["anomalie"];
    $rapport_anormal = $_REQUEST["decrire_toute_anomalie"];
    // // Posture de la tete  et du corps

    // // ventilation
    $narinaires = $_REQUEST["narinaires"];
    $unilateral_D = $_REQUEST["unilateral_D"];
    $unilateral_G = $_REQUEST["unilateral_G"];
    $rétrécissement_symétrique = $_REQUEST["rétrécissement_symétrique"];
    // // ventilation

    // // mastication
    $unilaterale_alternée = $_REQUEST["unilaterale_alternée"];
    $unilaterale_dominante = $_REQUEST["unilaterale_dominante"];
    $masseterine = $_REQUEST["masseterine"];
    $temporale = $_REQUEST["temporale"];
    // // mastication

    // // phonation
    $palatales = $_REQUEST["palatales"];
    $anomaliep = $_REQUEST["anomaliep"];
    $sibilantes = $_REQUEST["sibilantes"];
    $anomalies = $_REQUEST["anomalies"];
    $chuintantes = $_REQUEST["chuintantes"];
    $anomaliec = $_REQUEST["anomaliec"];
    $fricatives = $_REQUEST["fricatives"];
    $anomalief = $_REQUEST["anomalief"];
    // // phonation

    // // para fonction
    $succion_digitale = $_REQUEST["succion_digitale"];
    $tétée = $_REQUEST["tétée"];
    $bruxisme = $_REQUEST["bruxisme"];
    // // para fonction

    // // Rapport du sens vertical
    $normalb = $_REQUEST["normalb"];
    $Augmentéb = $_REQUEST["Augmentéb"];
    $Diminuéb = $_REQUEST["Diminuéb"];
    $normalj = $_REQUEST["normalj"];
    $Augmentéj = $_REQUEST["Augmentéj"];
    $Diminuéj = $_REQUEST["Diminuéj"];
    // // Rapport du sens transversal

    $mincisif = $_REQUEST["mincisif"];
    $non_respectée = $_REQUEST["non_respectée"];
    $molaire_engrenante = $_REQUEST["molaire_engrenante"];
    $bout = $_REQUEST["bout"];
    $occlusion_inversée = $_REQUEST["occlusion_inversée"];
    // // Rapport du sens transversal

    // // rapport du sens sagittal
    $cl_l_symetrique = $_REQUEST["cl_l_symetrique"];
    $cl_l_asymetrique = $_REQUEST["cl_l_asymetrique"];
    $cl_ll_symetrique = $_REQUEST["cl_ll_asymetrique"];
    $cl_ll_asymetrique = $_REQUEST["cl_ll_asymetrique"];
    $cl_lll_symetrique = $_REQUEST["cl_lll_symetrique"];
    $cl_lll_symetrique = $_REQUEST["cl_lll_asymetrique"];
    // // rapport du sens sagittal

    // // classe d’angle  canines 
     $cl_l_symetriquec = $_REQUEST["cl_l_symetriquec"];
    $cl_l_asymetriquec = $_REQUEST["cl_l_asymetriquec"];
    $cl_ll_symetriquec = $_REQUEST["cl_ll_symetriquec"];
    $cl_ll_asymetriquec = $_REQUEST["cl_ll_asymetriquec"];
     $cl_lll_symetriquec = $_REQUEST["cl_lll_symetriquec"];
    $cl_lll_asymetriquec = $_REQUEST["cl_lll_asymetriquec"];
    // // classe d’angle  canines 

    // // classe d’angle  molaire
    $cl_l_symetriquem = $_REQUEST["cl_l_symetriquem"];
    $cl_l_asymetriquem = $_REQUEST["cl_l_asymetriquem"];
    $cl_ll_symetriquem = $_REQUEST["cl_ll_symetriquem"];
    $cl_ll_asymetriquem = $_REQUEST["cl_ll_asymetriquem"];
    $cl_lll_symetriquem = $_REQUEST["cl_lll_symetriquem"];
    $cl_lll_asymetriquem = $_REQUEST["cl_lll_asymetriquem"];
    // classe d’angle  molaire

    // examen des fonctions occlusales
    $interférenced = $_REQUEST["interférenced"];
    $protrusion = $_REQUEST["protrusion"];
    $non_respectee = $_REQUEST["non_respectée"];
    $latéralité_D_canine = $_REQUEST["latéralité_D_canine"];
    $antero_latéraled = $_REQUEST["antero_latéraled"];
    $grouped = $_REQUEST["grouped"];
    $antero_latéraleg = $_REQUEST["antero_latéraleg"];
    $groupeg = $_REQUEST["groupeg"];
    $interférenceg = $_REQUEST["interférenceg"];
     $exp = $_REQUEST["exp5"];
     $exp1 = $_REQUEST["exp1"];
     $exp2 = $_REQUEST["exp2"];
     $exp3 = $_REQUEST["exp3"];
     $exp4 = $_REQUEST["exp4"];
    $expp = $_REQUEST["expp"];

    // examen des fonctions occlusales

    // Rapport du sens vertical

    $query = $db->prepare("INSERT INTO fiche_clinique(
        symetrique,asymetrique,respecte,etage_nasal_augmante,etage_inferieur_augmante,ena_diminue,eia_diminue,harmonieux,dyharmonieux,orthofrontal,cisfrontal,transfrontal,presence_stomion,absence_stomion,jointive_sans_contraction_apparente,rapport_anormal,droit,devie,bruit_douleurs_articulaires,circonscrite,anterieurer,lateraler,totaler,circonscritef,anterieuref,lateralef,totalef,aucune_anomalie_visible,decrire_anomalie,orifices_narinaires_arrondies,retrecit_unilaterald,retrecit_unilateraleg,retrecissement_symetrique,unilaterale_alternee,unilaterale_dominante,masseterine,temporale,les_palatales_normales,anomaliep,sibilantes_normales,anomalies,chuintantes_normales,anomaliec,fricatives_normales,anomalief,succion_digitale,tetee,bruxisme,obnormal,ob_augmante,ob_diminue,oj_normal,oj_augmante,oj_diminue,media_incisif_respecte,exp5,non_respecte,exp1,occlusion_molaire,exp2,bout_a_bout,exp3,occlusion_inverse,exp4,cl_l_symetrique,cl_l_asymetrique,cl_ll_symetrique,cl_ll_asymetrique,cl_lll_symetrique,cl_lll_asymetriquec,cl_ll_symetriquem,cl_ll_asymetriquem,cl_lll_symetriquem,cl_lll_asymetriquem,cl_l_symetriquec,cl_l_asymetriquec,cl_ll_symetriquec,cl_ll_asymetriquec,cl_lll_symetriquec,cl_lll_asymetrique,cl_l_symetriquem,cl_l_asymetriquem,interferenced,protrusion_respecte,non_respectee,expp,canine,antero_lateraled,grouped,antero_lateraleg,groupeg,interferenceg,idm)
        VALUES(:symetrique,:asymetrique,:respecte,:etage_nasal_augmante,:etage_inferieur_augmante,:ena_diminue,:eia_diminue,:harmonieux,:dyharmonieux,:orthofrontal,:cisfrontal,:transfrontal,:presence_stomion,:absence_stomion, :jointive_sans_contraction_apparente,:rapport_anormal,:droit,:devie,:bruit_douleurs_articulaires,:circonscrite,:anterieurer,:lateraler,:totaler,:circonscritef,:anterieuref,:lateralef,:totalef,:aucune_anomalie_visible,:decrire_anomalie,:orifices_narinaires_arrondies,:retrecit_unilaterald,:retrecit_unilateraleg,:retrecissement_symetrique,:unilaterale_alternee,:unilaterale_dominante,:masseterine,:temporale,:les_palatales_normales,:anomaliep,:sibilantes_normales,:anomalies,:chuintantes_normales,:anomaliec,:fricatives_normales,:anomalief,:succion_digitale,:tetee,:bruxisme,:obnormal,:ob_augmante,:ob_diminue,:oj_normal,:oj_augmante,:oj_diminue,:media_incisif_respecte,:exp5,:non_respecte,:exp1,:occlusion_molaire,:exp2,:bout_a_bout,:exp3,:occlusion_inverse,:exp4,:cl_l_symetrique,:cl_l_asymetrique,:cl_ll_symetrique,:cl_ll_asymetrique,:cl_lll_symetrique,:cl_lll_asymetriquec,:cl_ll_symetriquem,:cl_ll_asymetriquem,:cl_lll_symetriquem,:cl_lll_asymetriquem,:cl_l_symetriquec,:cl_l_asymetriquec,:cl_ll_symetriquec,:cl_ll_asymetriquec,:cl_lll_symetriquec,:cl_lll_asymetrique,:cl_l_symetriquem,:cl_l_asymetriquem,:interferenced,:protrusion_respecte,:non_respectee,:expp,:canine,:antero_lateraled,:grouped,:antero_lateraleg,:groupeg,:interferenceg,:idm)");
        if(
        $query->execute([
            ':symetrique'=> $symetrique,
            ':asymetrique'=> $Asymetrique,
            ':respecte'=> $respectés,
            ':etage_nasal_augmante'=> $augmenté,
            ':etage_inferieur_augmante'=> $inférieur_augmenté,
            ':ena_diminue'=> $ena_diminué,
            ':eia_diminue'=> $eia_diminué,
            ':harmonieux'=> $harmonieux,
            ':dyharmonieux'=> $Dyharmonieux,
            ':orthofrontal'=> $orthofrontal,
            ':cisfrontal'=> $frontal,
            ':transfrontal'=> $transfrontal,
            ':presence_stomion'=> $présence_stomion,
            ':absence_stomion'=> $absence_stomion,
            ':jointive_sans_contraction_apparente'=> $jointive_sans_contraction,
            ':rapport_anormal'=> $rapport,
            ':droit'=> $droit,
            ':devie'=> $devié,
            ':bruit_douleurs_articulaires'=> $douleurs,
            ':circonscrite'=> $circonscrite_rep,
            ':anterieurer'=> $anterieure_rep,
            ':lateraler'=> $laterale_rep,
            ':totaler'=> $totale_rep,
            ':circonscritef'=> $circonscrite,
            ':anterieuref'=> $anterieure_fct,
            ':lateralef'=> $laterale_fct,
            ':totalef'=> $totale_fct,
            ':aucune_anomalie_visible'=> $anomalie,
            ':decrire_anomalie'=> $rapport_anormal,
            ':orifices_narinaires_arrondies'=> $narinaires,
            ':retrecit_unilaterald'=> $unilateral_D,
            ':retrecit_unilateraleg'=> $unilateral_G,
            ':retrecissement_symetrique'=> $rétrécissement_symétrique,
            ':unilaterale_alternee'=> $unilaterale_alternée,
            ':unilaterale_dominante'=> $unilaterale_dominante,
            ':masseterine'=> $masseterine,
            ':temporale'=> $temporale,
            ':les_palatales_normales'=> $palatales,
            ':anomaliep'=> $anomaliep,
            ':sibilantes_normales'=> $sibilantes,
            ':anomalies'=> $anomalies,
            ':chuintantes_normales'=> $chuintantes,
            ':anomaliec'=> $anomaliec,
            ':fricatives_normales'=> $fricatives,
            ':anomalief'=> $anomalief,
            ':succion_digitale'=> $succion_digitale,
            ':tetee'=> $tétée,
            ':bruxisme'=> $bruxisme,
            ':obnormal'=> $normalb,
            ':ob_augmante'=> $Augmentéb,
            ':ob_diminue'=> $Diminuéb,
            ':oj_normal'=> $normalj,
            ':oj_augmante'=> $Augmentéj,
            ':oj_diminue'=> $Diminuéj,
            ':media_incisif_respecte'=> $mincisif,
            ':exp5'=> $exp,
            ':non_respecte'=> $non_respectée,
            ':exp1'=> $exp1,
            ':occlusion_molaire'=> $molaire_engrenante,
            ':exp2'=> $exp2,
            ':bout_a_bout'=> $bout,
            ':exp3'=> $exp3,
            ':occlusion_inverse'=> $occlusion_inversée,
            ':exp4'=> $exp4,
            ':cl_l_symetrique'=> $cl_l_symetrique,
            ':cl_l_asymetrique'=> $cl_l_asymetrique,
            ':cl_ll_symetrique'=> $cl_ll_symetrique,
            ':cl_ll_asymetrique'=> $cl_ll_asymetrique,
            ':cl_lll_symetrique'=> $cl_lll_symetrique,
            ':cl_lll_asymetriquec'=> $cl_lll_asymetriquec,
            ':cl_ll_symetriquem'=>  $cl_ll_symetriquem ,
            ':cl_ll_asymetriquem'=> $cl_ll_asymetriquem,
            ':cl_lll_symetriquem'=> $cl_lll_symetriquem,
            ':cl_lll_asymetriquem'=> $cl_lll_asymetriquem,
            ':cl_l_symetriquec'=> $cl_l_symetriquec,
            ':cl_l_asymetriquec'=> $cl_l_asymetriquec,
            ':cl_ll_symetriquec'=> $cl_ll_symetriquec,
            ':cl_ll_asymetriquec'=> $cl_ll_asymetriquec,
            ':cl_lll_symetriquec'=> $cl_lll_symetriquec,
            ':cl_lll_asymetrique'=> $cl_lll_symetrique,
            ':cl_l_symetriquem'=> $cl_l_symetriquem,
            ':cl_l_asymetriquem'=> $cl_l_asymetriquem,
            ':interferenced'=> $interférenced,
            ':protrusion_respecte'=> $protrusion,
            ':non_respectee'=> $non_respectee,
            ':expp'=> $expp,
            ':canine'=> $latéralité_D_canine,
            ':antero_lateraled'=> $antero_latéraled,
            ':grouped'=> $grouped,
            ':antero_lateraleg'=> $antero_latéraleg,
            ':groupeg'=> $groupeg,
            ':interferenceg'=> $interférenceg,
            ':idm'=> $id
            ])
        ){
            
            $idf_last = $db->lastInsertId();
            $update_stmt = $db->prepare("UPDATE malade SET idf =:idf_id WHERE idm=:id");
            $update_stmt->bindParam(':idf_id', $idf_last);
            $update_stmt->bindParam(':id', $id);
            $update_stmt->execute();

            
            
        }
}