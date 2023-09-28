<?php

    $db = new PDO('mysql:host=localhost;dbname=bloc3test;charset=utf8','root','');

    //creer un membre
    function createMembre($db, $identifiant, $password){ 
    $r = "INSERT INTO users(name_user, password) VALUES (:identifiant, :password)";
    $req = $db->prepare($r);
    $valeurs = [':identifiant'=>$identifiant, ':password'=>$password];
    $req->execute($valeurs);
    return $db->lastInsertId();
    }

    // lire toute la table users
    function readAllMembre($db){ 
        $r = $db->query("SELECT * FROM users");
        return $r->fetchAll();
    }

    // Lire un membre grace a son id
    function readMembre($db, $id_membre){
        $stmt = $db->prepare("SELECT * FROM users WHERE id_user = :id_membre");
        $stmt->bindParam(':id_membre', $id_membre);
        $stmt->execute();
        $res = $stmt->fetch();
        return $res;
    }    

    // Recherche les textes en fonction d'un id_user
    function readAllTexte($db, $identifiant){
        $r = "SELECT * FROM texts WHERE id_user = :identifiant";
        $req = $db->prepare($r);
        $req->execute([':identifiant'=>$identifiant]);
        $resultat = $req->fetchAll();
        return $resultat;
    }

    // Lire un texte grace a son id
    function readTexte($db, $id_text){
        $r = "SELECT * FROM texts WHERE id_text = :id_text";
        $req = $db->prepare($r);
        $req->execute([':id_text'=>$id_text]);
        $resultat = $req->fetch();
        return $resultat;
    }

    // Creer un texte
    function creatText($db, $title, $id_user, $text){
        $r = "INSERT INTO texts(title, text, id_user) VALUES (:title, :text, :id_user)";
        $req = $db->prepare($r);
        $valeurs = [':id_user'=>$id_user, ':text'=>$text, ':title'=>$title];
        $req->execute($valeurs);
        return $db->lastInsertId();
    }


    // Modifier un texte:
    function updateText($db,$title, $text, $id_text){
        $r = "UPDATE texts SET title = :title, text = :text WHERE id_text = :id_text";
        $req = $db->prepare($r);
        $valeurs = [':title'=>$title, ':text'=>$text, ':id_text'=> $id_text];
        return $req->execute($valeurs);
    }

    function deleteText($db, $id) {
        $r = "DELETE FROM texts WHERE id_text = :id";
        $req = $db->prepare($r);
        return $req->execute(['id' => $id]);
    }
    
    // Lit un element de la table en fonction d'un id_user
    function readelement($db, $colonne, $name_user){
        $r = "SELECT $colonne FROM users WHERE name_user = :name_user";
        $req = $db->prepare($r);
        $req->execute([':name_user'=>$name_user]);
        $resultat = $req->fetch();
        return $resultat[0];
    }
    