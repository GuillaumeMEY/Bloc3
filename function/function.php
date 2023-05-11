<?php

    $db = new PDO('mysql:host=localhost;dbname=clubdelecturetest;charset=utf8','root','');

    //creer un membre
    function createMembre($db, $identifiant, $password, $mail){ 
    $r = "INSERT INTO users(name_user, password, mail) VALUES (:identifiant, :password, :mail)";
    $req = $db->prepare($r);
    $valeurs = [':identifiant'=>$identifiant, ':password'=>$password, ':mail'=>$mail];
    $req->execute($valeurs);
    return $db->lastInsertId();
    }

    // lire toute la table membre
    function readAllMembre($db){ 
        $r = $db->query("SELECT * FROM users");
        return $r->fetchAll();
    }
    

    // en cour
    function readelement($db, $colonne, $identifiant){
        $r = "SELECT $colonne FROM users WHERE name_user = :identifiant";
        $req = $db->prepare($r);
        $req->execute([':identifiant'=>$identifiant]);
        $resultat = $req->fetch();
        return $resultat[0];
    }
    //a cofirmer
    function readMembre($db, $ID_membre, $recherche){
        $r = $db->query("SELECT * FROM users WHERE id_user = $ID_membre");
        $nom = $r->fetch(PDO::FETCH_OBJ);
        return $nom->$recherche;
    }