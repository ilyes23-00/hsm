<?php

require_once 'conn.php'; //connect data base

$id_user = $_SESSION['idp'];

// produits add
if(isset($_POST["submit_produits"])){
    $Nature = $_POST["Nature"];
    $dateArrive=$_POST["date"];
    $quantite=$_POST["quantité"];
    
    $query = $db->prepare("INSERT INTO produits(Nature,dateArrive,quantite,:idp) VALUES(:Nature,:dateArrive,:quantite,:idp)");
    $query->execute([
       ':Nature' => $Nature,
       ':dateArrive' => $dateArrive,
       ':quantite' => $quantite,
       ':idp' => $id_user
    ]
    );
}

// produits 

// instrument add
if(isset($_POST["submit_instrument"])){
    $type = $_POST["type"];
    $date=$_POST["date"];
    
    $query = $db->prepare("INSERT INTO instrument(type,dateArrive,idp) VALUES(:type,:dateArrive,:idp)");
    $query->execute([
       ':type' => $type,
       ':dateArrive' => $date,
       ':idp' => $id_user
    ]
    );
}




// produits add


$sql ="SELECT * FROM  produits WHERE idp =:idp";
$query = $db->prepare($sql);
$query->bindParam(':idp',$id_user);
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);

$sql ="SELECT * FROM  instrument WHERE idp =:idp";
$query = $db->prepare($sql);
$query->bindParam(':idp',$id_user);
$query->execute();
$instrument = $query->fetchAll(PDO::FETCH_ASSOC);