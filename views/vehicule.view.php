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
?>

<section class="section_vehicule">
    <img src="/public/img/<?= $vehicule->getPhoto();?>">
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

<?php
$content = ob_get_clean();
require "views/template.php";
?>