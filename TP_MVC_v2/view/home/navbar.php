<?php 
session_start();
?>
<body>
<div class="navbar">
        <a href="index.php?homepage" class="nav-link">Accueil</a>
        <a href="#" class="nav-link">À propos</a>
        <a href="#" class="nav-link">Services</a>
        <a href="#" class="nav-link">Contact</a>
        <div class="login">
        <?php
        if (isset($_SESSION['user_id'])) {
            // L'utilisateur est connecté, affichez le bouton de déconnexion
            echo '<a href="index.php?logout" class="btn-login">Déconnexion</a>';
        } else {
            // L'utilisateur n'est pas connecté, affichez les boutons Inscription et Connexion
            echo '<a href="index.php?login" class="btn-login">Connexion</a>';
            echo '<a href="index.php?new" class="btn-login">Inscription</a>';
        }
        ?>
        </div>
        <div class="log">
            <?php
            if (isset($_SESSION['user_id'])) {
            // L'utilisateur est connecté, affichez le bouton de déconnexion
                echo '<p class="logged">Vous êtes : connecté</p>';
            } else {
            // L'utilisateur n'est pas connecté, affichez les boutons Inscription et Connexion
                echo '<p>Vous êtes : deconnecté</p>';
            }
            ?>
        </div>
    </div>
</body>