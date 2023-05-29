<?php 
session_start();
require_once('../function/function.php');

//$Pseudo = $_SESSION['Pseudo'];
var_dump($_SESSION);
//$ID_membre = readID($db, $Pseudo);
$texts = readTexte($db, $_SESSION['id_user']);
$membres = readAllMembre($db);

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


    <h3>Liste de vos texte</h3>
    <?php
    foreach($texts as $text){
        echo $text['title'] . ' ' . $text['created_at'] . "</br>";
        echo $text['text'] . "</br>";
    }
?>
<p><a href="ajouttexte.php">Ajoutez un nouveau texte</a></p>


<h3>Liste des membres:</h3>
<?php
    foreach($membres as $membre){
        echo $membre['name_user'] . "</br>";
    }
?>
</body>
</html>