<form id="loginForm" action="./verify.php" method="POST">
    <label for="username">Nom :</label>
    <input type="text" id="username" name="username" autocomplete="name" required><br>
    
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" autocomplete="new-password" required><br>
    
    <input type="submit" value="Se connecter" name="btnLog">
    <div id="validateLog"></div>
</form>
<script src="./assets/javascript/script.js"></script>