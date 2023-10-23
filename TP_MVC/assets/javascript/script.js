// POUR S'INSCRIRE
$(document).ready(function() {
    $('#newForm').submit(function(e) {
        e.preventDefault();
        
        $.ajax({
            type: 'POST',
            url: '../TP_MVC/controller/request.php',
            data: $("#newForm").serialize(),
            success: function(data) {
                // Traitez la réponse ici (affichez des messages d'erreur, redirigez, etc.)
                console.log(data);
                $('#validateMsg').html('<p>Inscription réussi !</p>');
                // Redirection vers index.php après 2 secondes
                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 2000); // 2000 millisecondes = 2 secondes
            }
        });
    });
});

// POUR LE LOGIN
$(document).ready(function() {
    $('#loginForm').submit(function(e) {
        e.preventDefault();
        
        $.ajax({
            type: 'POST',
            url: 'controller/verify.php', // Créez ce fichier PHP
            data: $('#loginForm').serialize(),
            success: function(response) {
                // Traitez la réponse (par exemple, redirigez l'utilisateur s'il est connecté avec succès)
                console.log(response);
                $('#validateLog').html('<p>Connexion réussi !</p>');

                // setTimeout(function() {
                //     window.location.href = 'index.php';
                // }, 2000); // 2000 millisecondes = 2 secondes
            }   
        });
    });
});

