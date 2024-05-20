<?php ob_start();?>

<div id="divConnexion">
    <form action="connexion/c" id="ConnexionForm" method="POST">
        <label for="identifiantConnexion">Identifiant :</label>
        <input type="text" name="identifiantConnexion" require>
        <label for="mdpConnexion">Mot de passe :</label>
        <input type="text" name="mdpConnexion" require>
        <?php 
            if(!empty($_SESSION["connexion"])){ 
                echo $_SESSION["connexion"]; 
            } 
        ?>
        <button type="submit">Connexion</button>
    </form>
</div>


<?php
$content = ob_get_clean();
require_once "template.php";
?>