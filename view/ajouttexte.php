<?php

session_start();

// Vérifier si l'utilisateur n'est pas connecté
if (!isset($_SESSION['id_user'])) {
    header("Location:../view/auth/login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pour ajouter un nouveau texte, veuillez remplir ce formulaire:</h1>

    <form id="ajouttext" action="../treatment/ajouttexttreatment.php" method="POST">
        <p>Titre:<br/>
        <input type="text" name="title"  required class="txtBox"/><br/></p>

        <textarea id='text' name="text" placeholder='Racconte nous une histoire'></textarea><br/>

        <button class="bouton" type="submit"  value="Envoyer">Ajouter mon texte</button>
    </form>
    
    
</body>
</html>