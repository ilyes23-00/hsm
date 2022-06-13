<?php

require_once 'conn.php'; //connect data base

$id_user = $_SESSION['idp'];
// equipment add
if(isset($_REQUEST["submit_equipment"])){
    $type = $_REQUEST["type"];
    $date=$_REQUEST["date"];
    $anomalies=$_REQUEST["anomalies"];
    $Dateanomalies=$_REQUEST["Dateanomalies"];

    
    $query = $db->prepare("INSERT INTO equipement(type,dateArrive,anomalies,Dateanomalies,idp) VALUES(:type,:date,:anomalies,:Dateanomalies,:idp)");
    $query->execute([
        ':type'=>$type,
        ':date'=>$date,
        ':anomalies'=>$anomalies,
        ':Dateanomalies'=>$Dateanomalies,

        ':idp'=> $id_user
    ]
    );
}
// // equipment add

// personl add
if(isset($_POST["submit_personal"])){
    $Nom=strip_tags(trim($_POST["Nom"]));
    $Prenom=strip_tags(trim($_POST["Prenom"]));
    $Profil=strip_tags(trim($_POST["Profil"]));
    $DateRecrutement=strip_tags(trim($_POST["DateRecrutement"]));
    $password=strip_tags(trim($_POST["password"]));

    $query = $db->prepare("INSERT INTO prsnl(Nom,Prenom,Profil,DateRecrutement,password) VALUES(:Nom,:Prenom,:Profil,:DateRecrutement,:password)");
    $query->execute([
       'Nom' =>$Nom,
       'Prenom' =>$Prenom,
       'Profil' =>$Profil,
       'DateRecrutement' =>$DateRecrutement,
       'password' =>$password
    ]
     
    );
    
}
// personl add

    // malade add

    if(isset($_POST["submit_malade"])){
        $Nom=strip_tags(trim($_POST["Nom"]));
        $Prenom=strip_tags(trim($_POST["Prenom"]));
        $genre=strip_tags(trim($_POST["genre"]));
        $naissance=strip_tags(trim($_POST["naissance"]));
        $Age=strip_tags(trim($_POST["Age"]));
        $adresse=strip_tags(trim($_POST["adresse"]));
        $telephone=strip_tags(trim($_POST["telephone"]));
    
        $query = $db->prepare("INSERT INTO malade(nom,prenom,genre,DateNaissance,age,adresse,telephone,idp) VALUES(:Nom,:Prenom,:genre,:DateNaissance,:age,:adresse,:telephone,:idp)");
        $query->execute([
           'Nom' =>$Nom,
           'Prenom' =>$Prenom,
           'genre' =>$genre,
           'DateNaissance' =>$naissance,
           'age' =>$Age,
           'adresse' =>$adresse,
           'telephone' =>$telephone,
           'idp' =>$id_user

        ]
         
        );

    }
    // malade add

    // show data person 

$sql ="SELECT * FROM  prsnl  WHERE idp = :user_id";
$query = $db->prepare($sql);
$query->bindParam(':user_id', $id_user);
$query->execute();
$row2 = $query->fetchAll(PDO::FETCH_ASSOC);
// show data person 

// show data malade 

$sql ="SELECT * FROM  malade  WHERE idp = :user_id";
$query = $db->prepare($sql);
$query->bindParam(':user_id', $id_user);
$query->execute();
$row1 = $query->fetchAll(PDO::FETCH_ASSOC);
// show data malade 
?>
