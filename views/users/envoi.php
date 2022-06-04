<?php

$idm = $_GET['id'];

if(isset($_REQUEST["submit"])){

    $sql ="SELECT * FROM  prsnl";
    $query = $db->prepare($sql);
    $query->execute();
    $row2 = $query->fetchAll(PDO::FETCH_ASSOC);


    
    $sql = $db->prepare("UPDATE malade  SET workOn =:workOn WHERE Id=:id");
    $query->execute(':workOn',:$idm);
}

