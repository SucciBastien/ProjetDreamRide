<?php ob_start();
require_once "controller/modelsVehiculeController.php";
require_once "controller/marquesController.php";
require_once "controller/typesVehiculeController.php";
$modelsVehiculeController = new modelsVehiculeController();
$marquesController = new marquesController();
$typesVehiculeController = new typesVehiculeController();
$marques = $marquesController->afficherMarque();
$modelsVehicule = $modelsVehiculeController->afficherModelsVehicule();
$typesVehicule = $typesVehiculeController->afficherTypesVehicule();
$files = scandir("public/img");
foreach ($files as $file) {
    if (strpos($file, $vehicule->getPhoto() ) !== false) {
        $photo = $file;
    }
}
$minDate = date("Y-m-d");
$minDate = date("Y-m-d", strtotime($minDate . "+ 1 days"));
?>

<section class="section_vehicule">
    <img src="/public/img/<?= $photo;?>">
    <p><?= $marques[($modelsVehicule[($vehicule->getidModel()) - 1]->getidMarque()) - 1]->getnomMarque();?></p>
    <p><?= $modelsVehicule[($vehicule->getidModel()) - 1]->getnomModel();?></p>
    <div><p>Prix de location à l'heure </p><p>: <?= $vehicule->getprix();?> €</p></div>
    <div><p>Nombre de sièges </p><p>: <?= $vehicule->getsiege();?></p></div>
    <div><p>Nombre de portes </p><p>: <?= $vehicule->getporte();?></p></div>
    <div><p>Boite de vitesse </p><p>: <?php if ($vehicule->getestManuel() == 1){?>Manuelle<?php }else{?>Automatique<?php } ?></p></div>
    <div><p>Climatisation </p><p>: <?php if ($vehicule->getclim() == 1){?>Avec<?php }else{?>Sans<?php } ?></p></div>
    <div><p>Mise en circulation </p><p>: <?= $vehicule->getannee();?></p></div>
    <div><p>Type de vehicule </p><p>: <?= ucfirst($typesVehicule[($vehicule->getidTypeVehicule()) - 1]->getnomTypeVehicule()) ;?></p></div>
</section>
<section class="section_location">
    <?php if(!isset($_SESSION["compte"])) : ?>
        <p>Connectez-vous à votre compte client pour prendre une reservation</p>
    <?php else : ?>
        <p>Choisissez les dates et heures de location (heures comprises entre 08:00 et 19:00):</p>
        <form action="<?= URL ?>/r" method="POST" id="locationForm">
            <label for="dateStartLocation">Début de la location:</label>
            <input type="datetime-local" id="dateStartLocation" name="dateStartLocation" min="<?= $minDate ?>T08:00" max="2100-01-01T19:00" required>
            <label for="dateStartLocation">Fin de la location:</label>
            <input type="datetime-local" id="dateEndLocation" name="dateEndLocation" min="<?= $minDate ?>T08:00" max="2100-01-01T19:00" required>
            <button type="submit">Louer</button>
        </form>
        <p><?= $_SESSION["reservation"] ?></p>
    <?php endif ?>
</section>

<?php
$content = ob_get_clean();
require "views/template.php";
?>