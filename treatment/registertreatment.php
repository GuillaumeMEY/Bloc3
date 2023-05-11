<?php

require_once('../function/function.php');

// var_dump($_POST);

$ID_membre = createMembre($db, $_POST['identifiant'], $_POST['password'], $_POST['mail']);


// var_dump ($ID_membre);


session_unset(); // vide le "cache" de $_SESSION


$membres = readAllMembre($db);
// var_dump ($membres);
// var_dump ($_POST);

foreach($membres as $membre){
    if($_POST['password'] == $membre['password'] && $_POST['user'] == $membre['name_user']){



        $_SESSION['user'] = $_POST['user'];

        $identifiant = $_SESSION['user'];
        
        $mail = readelement($db,'mail', $identifiant);
        $id = readelement($db,'id_user', $identifiant);
        
        $_SESSION['mail'] = $mail;
        $_SESSION['id_user'] = $id;
    }
}


header('location:../view/profil.php');
