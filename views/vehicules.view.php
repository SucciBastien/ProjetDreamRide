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
    <form action="<?= URL ?>vehicules/a" method="post" style="border: 2px solid darkgray; margin-top: 20px;">
        <label for="image" >Image :</label><br>
        <input type="file" id="image" name="image">
        <label for="Prix">Prix :</label>
        <input type="number" name="Prix">
        <label for="NbSiege">Nombre de siege</label>
        <input type="number" name="NbSiege">
        <label for="NbPorte">Nombre de porte</label>
        <input type="number" name="NbPorte">
        <label for="EstManuel">Type de boite</label>
        <select name="EstManuel">
            <option value="true">Manuelle</option>
            <option value="false">Automatique</option>
        </select>
        <label for="Clim">Type de clim</label>
        <select name="Clim">
            <option value="true">Avec climatisation</option>
            <option value="false">Sans climatisation</option>
        </select>
        <label for="Circulation">Année de mise en circulation</label>
        <input type="number" name="Circulation">
        <label for="idModel">Model</label>
        <select name="idModel">
            <?php for($i = 0; $i < count($modelsVehicule); $i++) :?>
                <option value="<?= $modelsVehicule[$i]->getidModel() ?>"><?= $modelsVehicule[$i]->getnomModel() ?></option>
            <?php endfor ?>
        </select>
        <label for="idTypeVehicule">Type de Vehicule</label>
        <select name="idTypeVehicule">
            <?php for($i = 0; $i < count($typesVehicule); $i++) :?>
                <option value="<?= $typesVehicule[$i]->getidTypeVehicule() ?>"><?= $typesVehicule[$i]->getnomTypeVehicule() ?></option>
            <?php endfor ?>
        </select>
        <button type="submit" style="background-color: green;">Ajouter</button>
    </form>
    <?php for($i=0; $i<count($vehicules); $i++) :?>
    <article>
        <section>
            <img src="/public/img/<?= $vehicules[$i]->getPhoto();?>">
            <p><?= $marques[($modelsVehicule[($vehicules[$i]->getidModel()) - 1]->getidMarque()) - 1]->getnomMarque();?></p>
            <p><?= $modelsVehicule[($vehicules[$i]->getidModel()) - 1]->getnomModel();?></p>
        </section>
        <section>
            <div><p>Prix de location à l'heure </p><p>: <?= $vehicules[$i]->getprix();?> €</p></div>
            <div><p>Nombre de sièges </p><p>: <?= $vehicules[$i]->getsiege();?></p></div>
            <div><p>Nombre de portes </p><p>: <?= $vehicules[$i]->getporte();?></p></div>
            <div><p>Boite de vitesse </p><p>: <?php if ($vehicules[$i]->getestManuel() == 1){?>Manuelle<?php }else{?>Automatique<?php } ?></p></div>
            <div><p>Climatisation </p><p>: <?php if ($vehicules[$i]->getclim() == 1){?>Avec<?php }else{?>Sans<?php } ?></p></div>
            <div><p>Mise en circulation </p><p>: <?= $vehicules[$i]->getannee();?></p></div>
        </section>
    </article>
    <form action="<?= URL ?>vehicules/m/<?= $vehicules[$i]->getidVehicule(); ?>" method="post">
        <label for="nouveauPrix">Changer le prix :</label>
        <input type="number" name="nouveauPrix">
        <label for="nouveauNbSiege">Changer le nombre de siege</label>
        <input type="number" name="nouveauNbSiege">
        <label for="nouveauNbPorte">Changer le nombre de porte</label>
        <input type="number" name="nouveauNbPorte">
        <label for="nouveauEstManuel">Changer le type de boite</label>
        <select name="nouveauEstManuel">
            <option value="true">Manuelle</option>
            <option value="false">Automatique</option>
        </select>
        <label for="nouveauClim">Changer le type de clim</label>
        <select name="nouveauClim">
            <option value="true">Avec climatisation</option>
            <option value="false">Sans climatisation</option>
        </select>
        <label for="nouveauCirculation">Changer l'année de circulation</label>
        <input type="number" name="nouveauCirculation">
        <input type="hidden" name="identifiant" value="<?= $vehicules[$i]->getidVehicule();?>">
        <button type="submit">Valider</button>
    </form>
    <form action="<?= URL ?>vehicules/d/<?= $vehicules[$i]->getidVehicule(); ?>" method="post">
        <button type="submit" style="background-color: red;">SUPPRIMER</button>
    </form>
    <?php endfor; ?>
</section>

<?php
$content = ob_get_clean();
require_once "template.php";
?>