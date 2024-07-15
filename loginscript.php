<?php
// Activer l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Démarrer la session
session_start();

// Configuration de la base de données
$host = '135.125.234.128';
$port = '3306';
$dbname = 'TPWEB';
$username = 'radhwen';
$password = 'radhwen';

// Connexion à la base de données
try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Vérifier les informations d'identification de l'utilisateur
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier si l'email est défini et non vide
    if (empty($email)) {
        header("Location: login.php?error=L'adresse e-mail est obligatoire.");
        exit;
    }

    // Vérifier si le mot de passe est défini et non vide
    if (empty($password)) {
        header("Location: login.php?error=Le mot de passe est obligatoire.");
        exit;
    }

    try {
        // Préparer et exécuter la requête SQL
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier le mot de passe
        if ($user) {
            // Mot de passe correct, démarrer la session utilisateur
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            header("Location: index.php");
            exit; // Assurez-vous d'utiliser exit pour arrêter l'exécution du script après la redirection
        } else {
            // Mot de passe incorrect
            header("Location: login.php?error=Adresse e-mail ou mot de passe incorrect.");
            exit;
        }
    } catch (PDOException $e) {
        // Afficher un message d'erreur si la requête échoue
        header("Location: login.php?error=Erreur lors de l'exécution de la requête.");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}