<?php

require_once('../function/function.php');

$membres = readAllMembre($db);

$loggedIn = false; // Variable pour vérifier si l'utilisateur est connecté

foreach($membres as $membre){
    if($_POST['password'] == $membre['password'] && $_POST['user'] == $membre['name_user']){
        session_start();

        $_SESSION['user'] = $_POST['user'];

        $id = readelement($db,'id_user', $_SESSION['user']);
        
        $_SESSION['id_user'] = $id;
    
        $loggedIn = true;
        break; // Sortir de la boucle une fois que l'utilisateur est connecté
    }
}

if($loggedIn){
    header('location:../view/profil.php');
}else{
    header('location:../view/auth/login.php');
}
