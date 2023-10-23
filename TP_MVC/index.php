<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php include './view/home/navbar.php' ?>

    <?php 
        if (isset($_GET['new'])) {
            include './view/contact/new.php';
        }
        else if (isset($_GET['login'])) {
            include './view/contact/login.php';
        } 
        else {
            include './view/home/homepage.php';
        }
    ?>
</body>
<script src="./assets/javascript/script.js"></script>
</html>