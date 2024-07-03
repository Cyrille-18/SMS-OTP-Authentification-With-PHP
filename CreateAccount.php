<?php
include_once "functions.php";
include_once "DBconnection.php";


if (isset($_POST['Createsubmit'])) {

    if (verif_compte()) {
        $username = $_POST['username'];
        $password = password_hash($_POST['passwordconfirm'], PASSWORD_DEFAULT);
        $phone_number = $_POST['phonenumber'];
        $email = $_POST['email'];

        $sql = $PDO->prepare("INSERT INTO Utilisateur ( Username,UserPassword,UserEmail,UserPhoneNumber) VALUES (:username,:password,:email,:phone_number)");
        $sql->bindParam(":username", $username);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":phone_number", $phone_number);
        $sql->bindParam(":password", $password);
        $sql->execute();

    }
    header('location:VerificationCode.php');
    exit();
}
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
        <header>Créer un compte</header>
        <form action="CreateAccount.php" method="post" id="SignupForm">
            <div class="field input">
                <label for="username">Nom d'utilisateur:</label>
                <input type="text" name="username" id="username" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="email">Adresse mail:</label>
                <input type="email" name="email" id="email" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="phonenumber">Numero de Telephone:</label>
                <input type="tel" name="phonenumber" id="phonenumber" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="password">Mot de passe:</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="passwordconfirm">Confirmer votre mot de passe:</label>
                <input type="password" name="passwordconfirm" id="passwordconfirm" autocomplete="off" required>
            </div>

            <p class="error-message" id="Errorpassword"></p>

            <div class="field">
                <input class="btn" type="submit" name="Createsubmit" id="Createsubmit">
            </div>
            <div class="links">
                Vous avez déjà un compte ? <a href="Index.php">Connectez-vous</a>
            </div>
        </form>
    </div>
</div>
<script src="All.js?t=1234567890"></script>
</body>
</html>