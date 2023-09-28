<?php
session_start();
require_once('../function/function.php');

// Vérifier si l'utilisateur n'est pas connecté
if (!isset($_SESSION['id_user'])) {
    header("Location:../view/auth/login.php");
}


$id_text = $_POST['id_text'];// attribu l'id du texte
$text = readTexte($db, $id_text); // Recherche le texte grace à l'id defini juste avant

$text['title']. "<br>";
$text['text']. "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier votre texte</title>
</head>
<body>
    <h1>Modifier votre oeuvre</h1>

    <form id="ajouttext" action="../treatment/modifiertreatment.php" method="POST">
        <p>Titre:<br/>
        <input type="hidden" name="id_text"  value='<?php echo $id_text ?>'/>
        <input type="text" name="title"  value='<?php echo $text["title"] ?>'/><br/></p>

        <textarea type="text" name="text"><?php echo $text["text"] ?></textarea><br/>

        <button class="bouton" type="submit"  value="Envoyer">Modifier mon texte</button>
    </form>


</body>
</html>