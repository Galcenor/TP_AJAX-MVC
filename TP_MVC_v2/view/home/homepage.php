    <h1>Bienvenue</h1>
    <?php 
    if(isset($_SESSION["user_id"])) {
       echo $_SESSION["user_firstname"];
    } else {
        echo "";
    }
    ?>