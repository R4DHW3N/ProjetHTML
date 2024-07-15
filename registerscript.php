<?php
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

// Traitement du formulaire d'inscription
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['nom'];
    $lastName = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hacher le mot de passe
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Préparer et exécuter la requête d'insertion pour l'inscription
    $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)");
    $stmt->execute([
        'nom' => $name,
        'prenom' => $lastName,
        'email' => $email,
        'password' => $password // Utilisation du mot de passe haché
    ]);

    // Redirection vers la page de login après l'inscription réussie
    header("Location: login.php");
    exit;
}
?>
