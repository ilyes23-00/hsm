<?php

require_once 'conn.php'; //connect data base

$id_user = $_SESSION['idp'];

    // malade add

if(isset($_POST["submit_malade"])){
        $Nom=strip_tags(trim($_POST["Nom"]));
        $Prenom=strip_tags(trim($_POST["Prenom"]));
        $genre=strip_tags(trim($_POST["genre"]));
        $naissance=strip_tags(trim($_POST["naissance"]));
        $Age=strip_tags(trim($_POST["Age"]));
        $adresse=strip_tags(trim($_POST["adresse"]));
        $telephone=strip_tags(trim($_POST["telephone"]));
    
        $query = $db->prepare("INSERT INTO malade(nom,prenom,genre,DateNaissance,age,adresse,telephone,idp,workOn) VALUES(:Nom,:Prenom,:genre,:DateNaissance,:age,:adresse,:telephone,:idp,:workOn)");
        $query->execute([
           ':Nom' =>$Nom,
           ':Prenom' =>$Prenom,
           ':genre' =>$genre,
           ':DateNaissance' =>$naissance,
           ':age' =>$Age,
           ':adresse' =>$adresse,
           ':telephone' =>$telephone,
           ':idp' =>$id_user,
           ':workOn' =>$id_user

        ]);
}
    




    // malade add
    $sql ="SELECT * FROM  malade WHERE workOn = :workOn AND idp = :idp";
    $query = $db->prepare($sql);
    $query->bindParam(':workOn', $id_user);
    $query->bindParam(':idp', $id_user);
    $query->execute();
    $row1 = $query->fetchAll(PDO::FETCH_ASSOC);


$profil1 = 'resident';
$sql ="SELECT * FROM  prsnl WHERE Profil = :profil";
$query = $db->prepare($sql);
$query->bindParam('profil',$profil1);
$query->execute();
$ResidentMs = $query->fetchAll(PDO::FETCH_ASSOC);
 

  $profil = 'resident';
  if(isset($_POST['submit'])){

    $persa = $_POST['profil'];
    $idm = $_POST['idm'];  
    $query = $db->prepare("SELECT * FROM  prsnl WHERE Profil = :profil");
    $query->bindParam(':profil',$profil);
    $query->execute();
    $rows = $query->fetch(PDO::FETCH_ASSOC);
    $idp = $rows['idp'];
  
    $sql_update = $db->prepare("UPDATE malade SET workOn =:workOn WHERE idm =:idm");
    $sql_update->bindParam(':idm',$idm);
    $sql_update->bindParam(':workOn',$idp);
    $sql_update->execute();
  }