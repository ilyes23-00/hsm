<?php


require_once 'conn.php'; //connect data base

$id = $_GET['id'];
 

    $query = $db->prepare("SELECT * FROM fiche_clinique WHERE idm = :idm ");
    $query->bindParam(':idm', $id);
    $query->execute();
    $fiches = $query->fetchAll(PDO::FETCH_ASSOC);

  
    