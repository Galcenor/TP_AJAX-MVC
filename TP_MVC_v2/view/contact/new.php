    <div class="allformdiv">
        <h1 class="titleformregister">Inscription</h1>
        <form id="newForm" action="" method="POST">
        <label for="username" id="usernamelab">Nom</label>
        <input type="text" id="usernameregister" name="username" autocomplete="name" required><br>
    
        <label for="email" id="maillab">Email</label>
        <input type="email" id="emailregister" name="email" autocomplete="email" required><br>
    
        <label for="password" id="passlab">Mot de passe</label>
        <input type="password" id="passwordregister" name="password" autocomplete="new-password" required><br>
    
        <input type="submit" value="S'inscrire" id="btnSub" name="btnNew">
        </form>
        <div id="validateMsg"></div>
    </div>
<script src="index.php/assets/javascript/script.js"></script>