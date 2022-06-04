<?php

require_once 'conn.php'; //connect data base
$id_user = $_SESSION['idp'];

$sql ="SELECT * FROM  malade WHERE workOn=:workOn";
$query = $db->prepare($sql);
$query->bindParam(':workOn', $id_user);
$query->execute();
$residents = $query->fetchAll(PDO::FETCH_ASSOC);