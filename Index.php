<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Stark Company | Login</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
<div class="Container">
    <div class="box form-box">
        <header>Connexion</header>
        <form action="" method="post">
            <div class="field input">
                <label for="username">Nom d'utilisateur:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="field input">
                <label for="password">Mot de passe:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="field">
                <input class="btn" type="submit" name="submit" id="submit">
            </div>
            <div class="links">
                Vous n'avez pas de compte ? <a href="CreateAccount.php">Créer un compte</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
