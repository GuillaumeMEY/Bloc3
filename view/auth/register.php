<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1> Creer un compte</h1>

    <form id="formModifier" action="../../treatment/registertreatment.php" method="POST"> 
        <input type="hidden" name="id"/>

        <p>Choisissez un identifiant<br/>
        <input type="text" name="identifiant" placeholder="Identifiant" required class="txtBox"/><br/></p>

        <p>Choisissez un mot de passe<br/>
        <input type="password" name="password" placeholder="Mot de passe" required class="txtbox"/></p>

        <p>E-mail<br/>
        <input type="text" name="mail" placeholder="E-mail" required class="txtBox"/></p>

        <button class="bouton" type="submit"  value="Envoyer">Inscription</button>

    </form>
</body>
</html>