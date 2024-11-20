<?php
$host = 'localhost'; // Adresse du serveur MySQL
$dbname = 'zoo_arcadia'; // Nom de ta base de données
$username = 'root'; // Ton nom d'utilisateur MySQL
$password = ''; // Ton mot de passe MySQL (laisse vide si tu n'as pas de mot de passe)

// Essaie de te connecter à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
