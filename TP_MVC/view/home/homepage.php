<body>
    Bienvenue
    <?php 
    if(isset($_SESSION["user_id"])) {
        $_SESSION["username"];
    } else {
        echo "utilisateur";
    }
    ?>
</body>