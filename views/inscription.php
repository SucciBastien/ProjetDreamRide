<?php ob_start(); ?>

<div id="divInscription">
    <form action="inscription/i" id="inscriptionForm" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" require>
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" require>
        <label for="num">Numéro de téléphone :</label>
        <input type="text" name="num" require>
        <label for="mail">Adresse mail :</label>
        <input type="text" name="mail" require>
        <label for="identifiant">Identifiant :</label>
        <input type="text" name="identifiant" require>
        <label for="mdp">Mot de passe :</label>
        <input type="text" name="mdp" require>
        <label for="mdpConfirm">Confirmer le mot de passe :</label>
        <input type="text" name="mdpConfirm" require>
        <?php
            if (!empty($_SESSION["mdpDif"])){
                echo $_SESSION["mdpDif"];
            } 
        ?>
        <button type="submit">Inscription</button>
    </form>
    
</div>


<?php
$content = ob_get_clean();
require_once "template.php";
?>