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
    <title>New Password</title>
</head>
<body class="password">

    <div class="password-box">
        <div class="password-header">
            <header>Forgot password?</header>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="New Password..." autocomplete="off" required>
        </div>

        <div class="forgot">
            <section>
                <p>Type your new password..</p>
            </section>
        </div>
        <div class="input-submit">
            <a href="Login.html">
            <button class="submit-btn" id="submit"></button>
        </a>
            <label for="submit">Reset Password</label>
        </div>
        <div class="sign-up-link">
            <p>Back to <a href="Login.html">Sign in</a></p>
        </div>
    </div>
    
</body>
</html>