<?php 
session_start();
require_once('../function/function.php');

//$Pseudo = $_SESSION['Pseudo'];
var_dump($_SESSION);
//$ID_membre = readID($db, $Pseudo);


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
    <a href="../treatment/logout.php">Se deconnecter</a>
    <h1>Bienvenue sur votre profil <?php echo $_SESSION['user']?></h1>  <!-- Mettre la MAJ la premiere lettre -->

</body>
</html>