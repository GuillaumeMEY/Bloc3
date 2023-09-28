<?php
session_start();
require_once('../function/function.php');
$id_user = $_POST['id_user'];
$membre = readMembre($db, $id_user);
$texts = readAllTexte($db, $id_user);

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
    <a href="../view/profil.php">Votre profil</a>
    <a href="../treatment/logout.php">Se deconnecter</a>

    <h1>Page de <?php echo $membre["name_user"];?></h1>

    <h3>Liste les texte de <?php echo $membre["name_user"];?></h3>
    <?php
        foreach($texts as $text){
            echo $text['title'] . ' ' . $text['created_at'] . "</br>";
            echo $text['text'] . "</br>";
            echo '<form id="formModifier" action="modifier.php" method="POST"> 
                <input type="hidden" name="id_text" value ="' . $text["id_text"] . '"/>
            </form>';
        }
    ?>


    
</body>
</html>