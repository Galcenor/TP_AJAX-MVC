<?php
include '../models/database.php';


try {
    $database = new Database();
    $pdo = $database->getPDO();

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $users = "user";
    $token = "";

    $stmt = $pdo->prepare("INSERT INTO user (username, mail, mdp, role, token) VALUES (:username, :mail, :mdp, :role, :token)");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":mail", $email);
    $stmt->bindParam(":mdp", $password);
    $stmt->bindParam(":role", $users);
    $stmt->bindParam(":token", $token);

    if ($stmt->execute()) {
        echo "Inscription réussi";
    } else {
        echo "Erreur lors de l'inscription.";
    }
} catch (PDOException $e) {
    echo "ERROR :". $e->getMessage();
}
?>
