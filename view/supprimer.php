<?php
session_start();
require_once('../function/function.php');

$id_text = $_POST['id_text'];// attribu l'id du texte

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
    <title>Supprimer votre texte</title>
</head>
<body>
    <h1>Voulez vous vraiment supprimer votre oeuvre ?</h1>

    <a href="../treatment/deletetreatment.php?id_text=<?php echo $id_text; ?>" class="btn">Oui</a>

    <a href="profil.php" class="btn">Non</a>



</body>
</html>