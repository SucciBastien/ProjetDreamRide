<?php ob_start();?>

<section class="section_vehicule">
    <?php for($i=0; $i<count($vehicules); $i++) :?>
    <article>
        <section>
            <img src="/public/img/<?= $vehicules[$i]->getPhoto();?>">
            <p>Marque</p>
            <p>Modele</p>
        </section>
        <section>
            <div><p>Prix de location à l'heure </p><p>: <?= $vehicules[$i]->getprix();?> €</p></div>
            <div><p>Nombre de sièges </p><p>: <?= $vehicules[$i]->getsiege();?></p></div>
            <div><p>Nombre de portes </p><p>: <?= $vehicules[$i]->getporte();?></p></div>
            <div><p>
                Boite de vitesse </p><p>: <?php if ($vehicules[$i]->getestManuel() == 1){?>Manuelle<?php }else{?>Automatique<?php } ?>
            </p></div>
            <div><p>
                Climatisation </p><p>: <?php if ($vehicules[$i]->getclim() == 1){?>Avec<?php }else{?>Sans<?php } ?>
            </p></div>
            <div><p>Mise en circulation </p><p>: <?= $vehicules[$i]->getannee();?></p></div>
        </section>
    </article>
    <?php endfor; ?>
</section>

<?php
$content = ob_get_clean();
require_once "template.php";
?>