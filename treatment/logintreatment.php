<?php

require_once('../function/function.php');




$membres = readAllMembre($db);
// var_dump ($membres);
// var_dump ($_POST);

foreach($membres as $membre){
    if($_POST['password'] == $membre['password'] && $_POST['user'] == $membre['name_user']){


        session_start();
        $_SESSION['user'] = $_POST['user'];

        $identifiant = $_SESSION['user'];
        
        $mail = readelement($db,'mail', $identifiant);
        $id = readelement($db,'id_user', $identifiant);
        
        $_SESSION['mail'] = $mail;
        $_SESSION['id_user'] = $id;
        

    var_dump ($_SESSION);
    
    header('location:../view/profil.php');
}   
else{
   header('location:../view/auth/login.php');
}
}