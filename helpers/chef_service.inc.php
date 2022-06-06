<?php

$sql ="SELECT * FROM  equipement ";
$query = $db->prepare($sql);
$query->execute();
$row = $query->fetchAll(PDO::FETCH_ASSOC);


$sql ="SELECT * FROM  prsnl";
$query = $db->prepare($sql);
$query->execute();
$row2 = $query->fetchAll(PDO::FETCH_ASSOC);
  // show data malade 


$profil = 'maitre_assistant';

$sql ="SELECT * FROM  prsnl WHERE Profil = :profil";
$query = $db->prepare($sql);
$query->bindParam('profil',$profil);
$query->execute();
$row3 = $query->fetchAll(PDO::FETCH_ASSOC);

$sql ="SELECT * FROM  produits";
$query = $db->prepare($sql);
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);


$sql ="SELECT * FROM  instrument";
$query = $db->prepare($sql);
$query->execute();
$instrument = $query->fetchAll(PDO::FETCH_ASSOC);





$sql ="SELECT * FROM  malade WHERE idp != workOn ";
$query = $db->prepare($sql);

$query->execute();
$row1 = $query->fetchAll(PDO::FETCH_ASSOC);

// $array=[$row1];

// print_r($array) ;
// echo


if(isset($_POST['submit'])){

  $persa = $_POST['profil'];
  $idm = $_POST['idm'];


  $query = $db->prepare("SELECT idp FROM  prsnl WHERE Nom = :Nom");
  $query->bindParam(':Nom',$persa);
  $query->execute();
  $rows = $query->fetch(PDO::FETCH_ASSOC);
  $idp = $rows['idp'];

  $sql_update = $db->prepare("UPDATE malade SET workOn =:workOn, idp = :idp WHERE idm =:idm");
  $sql_update->bindParam(':idm',$idm);
  $sql_update->bindParam(':workOn',$idp);
  $sql_update->bindParam(':idp',$idp);
  $sql_update->execute();
}