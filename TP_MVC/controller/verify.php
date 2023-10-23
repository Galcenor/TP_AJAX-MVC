<?php

$host = 'localhost';
$dbname = 'blogsjt';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Requête pour vérifier les informations d'utilisateur
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['mdp'])) {
        // Les informations de connexion sont correctes

        // Créez une session utilisateur
        $_SESSION['user_id'] = $user['id'];

        // Maintenant, vous pouvez récupérer le nom d'utilisateur depuis la base de données
        $session_id = session_id();
    }
} catch (PDOException $e) {
    echo 'Erreur :'. $e->getMessage();
}
?>
