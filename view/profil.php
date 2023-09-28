<?php 
session_start();

require_once('../function/function.php');

// Vérifier si l'utilisateur n'est pas connecté
if (!isset($_SESSION['id_user'])) {
    header("Location:../view/auth/login.php");
}

$texts = readAllTexte($db, $_SESSION['id_user']);
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
    <!-- Logo a mettre -->
    <a href="../view/profil.php">Votre profil</a>
    <a href="../treatment/logout.php">Se deconnecter</a>
    <h1>Bienvenue sur votre profil <?php echo $_SESSION['user']?></h1>  <!-- Mettre la MAJ la premiere lettre -->


    <h3>Liste de vos texte</h3>
    <?php
        foreach($texts as $text){
            echo $text['title'] . ' ' . $text['created_at'] . "</br>";
            echo $text['text'] . "</br>";
            echo '<form id="formModifier" action="modifier.php" method="POST"> 
                <input type="hidden" name="id_text" value ="' . $text["id_text"] . '"/>
                <button class="bouton" type="submit"  value="Envoyer">Modifier</button>
            </form>';
            echo '<form id="form supprimer" action="supprimer.php" method="POST"> 
            <input type="hidden" name="id_text" value ="' . $text["id_text"] . '"/>
            <button class="bouton" type="submit"  value="Envoyer">Supprimer</button>
        </form>';
        }
    ?>

<p><a href="ajouttexte.php">Ajoutez un nouveau texte</a></p>


<h3>Liste des membres:</h3>
<?php
foreach ($membres as $membre) {
    echo 
    '<form id="formModifier" action="autreprofil.php" method="POST"> 
        <input type="hidden" name="id_user" value="' . $membre["id_user"] . '"/>
        <button class="bouton" type="submit" value="Envoyer">' . $membre['name_user'] . '</button>
    </form>';

}

?>
</body>
</html>