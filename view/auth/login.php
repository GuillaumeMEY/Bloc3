<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1> Connexion </h1>
        <form id="formModifier" action="../../treatment/logintreatment.php" method="POST">

            <p>Identifiant:<br/>
            <input type="text" name="user" placeholder="Identifiant" required class="txtBox"/><br/></p>

            <p>Mot de passe:<br/>
            <input type="password" name="password" placeholder="Mot de passe" required class="txtBox"/></p>

            <button class="bouton" type="submit"  value="Envoyer">Connexion</button>
        </form>
</body>
</html>
