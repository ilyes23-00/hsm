
<!--  login system  -->
<?php

// session_start();

require_once 'conn.php'; //connect data base

if(isset($_REQUEST["submit"])){
    
    if($_REQUEST["username"]=="" or $_REQUEST["password"]=="" or $_REQUEST["work"]==""){
        echo"<center><h1>name,: password,: work postion cannot be empty..!</h1></center>";
        
    }else{
        $name=strip_tags(trim($_REQUEST["username"]));
        $password=strip_tags(trim($_REQUEST["password"])) ;
        $work= $_POST["work"];
        $query = $db->prepare("SELECT * FROM prsnl WHERE Nom=? AND password=? AND Profil=? ");
        $query->execute(array($name,$password,$work));
        $control = $query->fetch(PDO::FETCH_ASSOC);
        if($control > 0){
            session_start();
             $_SESSION['name']= $name;
             $_SESSION['work']= $work;
             $_SESSION["idp"]= $control['idp'];
             
            if($_SESSION['work'] == 'secretaire'){
                header("location: views/users/secretaire.php");
            }else if ($_SESSION['work'] == 'resident'){
                header("location: views/users/resident.php");
            }else if ($_SESSION['work'] == 'paramedical'){
                header("location: views/users/paramedical.php");
            }
            else if ($_SESSION['work'] == 'maitre_assistant'){
                header("location: views/users/maitre_assistant.php");
            }else if ($_SESSION['work'] == 'chef_service'){
                header("location: views/users/chef_service.php");
            }
        }
        echo "<center><h1>incorrect password or name</h1></center>";
    }
}



