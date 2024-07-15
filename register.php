<?php
// Démarrer la session pour accéder aux informations de l'utilisateur
session_start();

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['user_id'])) {
    // Redirection vers la page d'accueil
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body class="register">

<div class="register-box">
    <div class="register-header">
        <header>Register</header>
    </div>
    <form method="POST" action="registerscript.php">
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Name" name="nom" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Last name" name="prenom" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="email" class="input-field" placeholder="Email" name="email" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" placeholder="Password" name="password" autocomplete="off" required>
        </div>
        <div class="input-submit">
            <button type="submit" class="submit-btn">Register</button>
        </div>
    </form>
    <div class="sign-in-link">
        <p>Already have an account? <a href="login.php">Log in!</a></p>
    </div>
</div>

</body>
</html>