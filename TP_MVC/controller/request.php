<?php

$host = 'localhost';
$dbname = 'blogsjt';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO user (username, mail, mdp) VALUES (:username, :mail, :mdp)");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":mail", $email);
    $stmt->bindParam(":mdp", $password);

    if ($stmt->execute()) {
        echo "Inscription réussi";
    } else {
        echo "Erreur lors de l'inscription.";
    }
} catch (PDOException $e) {
    echo "ERROR :". $e->getMessage();
}
?>
