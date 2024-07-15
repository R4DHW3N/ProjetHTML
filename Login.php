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
    <title>Login</title>
</head>
<body class="Login">

    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>

        <form action="loginscript.php" method="POST">
            <div class="input-box">
                <input type="text" name="email" class="input-field" placeholder="Email" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="forgot">
                <section>
                    <input type="checkbox" id="check" name="remember">
                    <label for="check"> Remember me</label>
                </section>
                <section>
                    <a href="forgot.html">Forgot password</a>
                </section>
            </div>
            <div class="input-submit">
                <button type="submit" class="submit-btn" id="submit">Log in</button>
            </div>
            <?php if (isset($_GET['error'])): ?>
                <div class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></div>
            <?php endif; ?>
        </form>

        <div class="sign-up-link">
            <p>Don't have an account? <a href="register.html">Sign up!</a></p>
        </div>
    </div>    
    
</body>
</html>