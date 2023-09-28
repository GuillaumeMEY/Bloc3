<?php

require_once('../function/function.php');

$id = createMembre($db, $_POST['identifiant'], $_POST['password']);

$membres = readAllMembre($db);

foreach($membres as $membre){
    if($_POST['password'] == $membre['password'] && $_POST['identifiant'] == $membre['name_user']){
        
        $id = readelement($db,'id_user', $_POST['identifiant']);
        
        session_start();
        $_SESSION['id_user'] = $id;
        $_SESSION['user'] = $_POST['identifiant'];

    }
}
header('location:../view/profil.php');
