<?php
session_start();
include '../models/database.php';

try {
    $database = new Database();
    $pdo = $database->getPDO();

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Requête pour vérifier les informations d'utilisateur
    $stmt = $pdo->prepare("SELECT * FROM user WHERE username = :username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['mdp'])) {
        // Les informations de connexion sont correctes

        // Créez une session utilisateur
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_firstname'] = $user['username'];

        // Maintenant, vous pouvez récupérer le nom d'utilisateur depuis la base de données
        $session_id = session_id();
        $user_role = $user['role'];
        $user_token = $user['token'];

        // Construisez l'URL avec ces informations
        $redirect_url = "accueil.php?id=" . $session_id . "&role=" . $user_role . "&token=" . $user_token;

        // Redirigez l'utilisateur vers l'URL avec les informations
        header("Location: accueil.php");
    }
} catch (PDOException $e) {
    echo 'Erreur :'. $e->getMessage();
}
?>
