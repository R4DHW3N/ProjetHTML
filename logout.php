<?php
// Initialiser la session
session_start();

// Détruire toutes les variables de session
$_SESSION = array();

// Détruire la session elle-même
session_destroy();

// Redirection vers la page de login ou une autre page après la déconnexion
header("Location: login.php");
exit;
?>
