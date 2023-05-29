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
    

    // Lit un element de la table en fonction d'un id_user
    function readelement($db, $colonne, $identifiant){
        $r = "SELECT $colonne FROM users WHERE name_user = :identifiant";
        $req = $db->prepare($r);
        $req->execute([':identifiant'=>$identifiant]);
        $resultat = $req->fetch();
        return $resultat[0];
    }
    // Recherche les textes en fonction d'un id_user
    function readTexte($db, $identifiant){
        $r = "SELECT * FROM textes WHERE id_user = :identifiant";
        $req = $db->prepare($r);
        $req->execute([':identifiant'=>$identifiant]);
        $resultat = $req->fetchAll();
        return $resultat;
    }
    function creatText($db, $title, $id_user, $text){
        $r = "INSERT INTO textes(title, text, id_user) VALUES (:title, :text, :id_user)";
        $req = $db->prepare($r);
        $valeurs = [':id_user'=>$id_user, ':text'=>$text, ':title'=>$title];
        $req->execute($valeurs);
        return $db->lastInsertId();
    }
    
    

    // a voir
    function readMembre($db, $ID_membre, $recherche){
        $r = $db->query("SELECT * FROM users WHERE id_user = $ID_membre");
        $nom = $r->fetch(PDO::FETCH_OBJ);
        return $nom->$recherche;
    }