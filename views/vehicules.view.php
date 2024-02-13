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

<aside id="filtresVehiculesContainer">
    <label for="suvCheck">SUV</label>
    <input type="checkbox" name="suvCheck" id="" value="">
    <label for="sportCheck">SPORT</label>
    <input type="checkbox" name="sportCheck" id="" value="">
    <label for="familialCheck">FAMILIALE</label>
    <input type="checkbox" name="familialCheck" id="" value="">
    <label for="coupeCheck">COUPE</label>
    <input type="checkbox" name="coupeCheck" id="" value="">
    <label for="cabrioletCheck">CABRIOLET</label>
    <input type="checkbox" name="cabrioletCheck" id="" value="">
    <label for="berlineCheck">BERLINE</label>
    <input type="checkbox" name="berlineCheck" id="" value="">
    <label for="4x4Check">4X4</label>
    <input type="checkbox" name="4x4Check" id="" value="">
    <label for="utilitaireCheck">UTILITAIRE</label>
    <input type="checkbox" name="utilitaireCheck" id="" value="">
    <label for="breakCheck">BREAK</label>
    <input type="checkbox" name="breakCheck" id="" value="">
</aside>

<section class="section_vehicules">
    <form action="<?= URL ?>vehicules/a" method="post" enctype="multipart/form-data" style="border: 2px solid darkgray; margin-top: 20px;">
        <label for="imag" >Image :</label>
        <input type="file" id="image" name="imag">
        <label for="Prix">Prix :</label>
        <input type="number" name="Prix" id="Prix">
        <label for="NbSiege">Nombre de siege</label>
        <input type="number" name="NbSiege"  id="NbSiege">
        <label for="NbPorte">Nombre de porte</label>
        <input type="number" name="NbPorte"  id="NbPorte">
        <label for="EstManuel">Type de boite</label>
        <select name="EstManuel" id="EstManuel">
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
        <button type="submit">Ajouter</button>
    </form>
    <?php for($i=0; $i<count($vehicules); $i++) :?>
    <article class="articleVehicule articleVehicule<?= $i+1 ?>">
        <a href="vehicule<?= $i+1 ?>">
            <section>
                <img src="/public/img/<?= $vehicules[$i]->getPhoto();?>">
                <p><?= $marques[($modelsVehicule[($vehicules[$i]->getidModel()) - 1]->getidMarque()) - 1]->getnomMarque();?></p>
                <p><?= $modelsVehicule[($vehicules[$i]->getidModel()) - 1]->getnomModel();?></p>
            </section>
            <section>
                <div><img src="/public/img/hour_price.png"><p> <?= $vehicules[$i]->getprix();?> €/h</p></div>
                <div><img src="/public/img/car_seat.png"><p><?= $vehicules[$i]->getsiege();?></p></div>
                <div><img src="/public/img/car_door.png"><p><?= $vehicules[$i]->getporte();?></p></div>
                <div><img src="/public/img/gearshift.png"><p><?php if ($vehicules[$i]->getestManuel() == 1){?>Manuelle<?php }else{?>Automatique<?php } ?></p></div>
                <div><img src="/public/img/climatisation.png"><p><?php if ($vehicules[$i]->getclim() == 1){?>Avec<?php }else{?>Sans<?php } ?></p></div>
                <div><img src="/public/img/car_service_year.png"><p><?= $vehicules[$i]->getannee();?></p></div>
                <div><img src="/public/img/car_type.png"><p><?= ucfirst($typesVehicule[($vehicules[$i]->getidTypeVehicule()) - 1]->getnomTypeVehicule()) ;?></p></div>
            </section>
        </a>
    </article>
    <form class="formVehicule formVehicule<?= $i+1 ?>" action="<?= URL ?>vehicules/m/<?= $vehicules[$i]->getidVehicule(); ?>" method="post" enctype="multipart/form-data">
        <p>Modification :</p>
        <label for="nouvelleImage" >Image :</label>
        <input type="file" id="nouveauImage" name="nouvelleImage" value="/public/img/<?= $vehicules[$i]->getPhoto();?>">
        <label for="nouveauPrix">Changer le prix :</label>
        <input type="number" name="nouveauPrix" value="<?= $vehicules[$i]->getprix();?>">
        <label for="nouveauNbSiege">Changer le nombre de siege :</label>
        <input type="number" name="nouveauNbSiege" value="<?= $vehicules[$i]->getsiege();?>">
        <label for="nouveauNbPorte">Changer le nombre de porte :</label>
        <input type="number" name="nouveauNbPorte" value="<?= $vehicules[$i]->getporte();?>">
        <label for="nouveauEstManuel">Changer le type de boite :</label>
        <select name="nouveauEstManuel">
            <option value="true">Manuelle</option>
            <option value="false">Automatique</option>
        </select>
        <label for="nouveauClim">Changer le type de clim :</label>
        <select name="nouveauClim">
            <option value="true" <?php if ($vehicules[$i]->getClim() == 1) :?> selected <?php endif ?>>Avec climatisation</option>
            <option value="false" <?php if ($vehicules[$i]->getClim() == 0) :?> selected <?php endif ?>>Sans climatisation</option>
        </select>
        <label for="nouveauCirculation">Changer l'année de circulation :</label>
        <input type="number" name="nouveauCirculation"  value="<?= $vehicules[$i]->getannee();?>">
        <label for="nouveauIdModel">Model</label>
        <select name="nouveauIdModel">
            <?php for($j = 0; $j < count($modelsVehicule); $j++) :?>
                <option value="<?= $modelsVehicule[$j]->getidModel() ?>" <?php if ( ($modelsVehicule[$j]->getidModel()) == ($vehicules[$i]->getidModel()) ) :?> selected <?php endif ?>><?= $modelsVehicule[$j]->getnomModel() ?></option>
            <?php endfor ?>
        </select>
        <label for="nouveauIdTypeVehicule">Type de Vehicule</label>
        <select name="nouveauIdTypeVehicule">
            <?php for($j = 0; $j < count($typesVehicule); $j++) :?>
                <option value="<?= $typesVehicule[$j]->getidTypeVehicule() ?>" <?php if ( ($typesVehicule[$j]->getidTypeVehicule()) == ($vehicules[$i]->getidTypeVehicule()) ) : ?> selected <?php endif ?>><?= $typesVehicule[$j]->getnomTypeVehicule() ?></option>
            <?php endfor ?>
        </select>
        <input type="hidden" name="identifiant" value="<?= $vehicules[$i]->getidVehicule();?>">
        <button type="submit">Valider</button>
    </form>
    <form class="formVehicule formVehicule<?= $i+1 ?>" action="<?= URL ?>vehicules/d/<?= $vehicules[$i]->getidVehicule(); ?>" method="post">
        <button type="submit" style="background-color: red;">SUPPRIMER</button>
    </form>
    <?php endfor; ?>
</section>

<?php
$content = ob_get_clean();
require_once "template.php";
?>