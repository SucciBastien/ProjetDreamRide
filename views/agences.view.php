<?php ob_start();
$url = explode("/", URL, FILTER_SANITIZE_URL);
?>

<aside id="filtresContainer">
    <div>
        <button><img src="/public/img/arrow-up-3100.png" alt="" id="closefiltre"><img src="/public/img/arrow-down-3101.png" alt="" id="openfiltre" class="hidden"></button>
    </div>
    <div>
        <label for="hdfCheck">Hauts-de-france</label>
        <input type="checkbox" name="hdfCheck" id="hdfCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "hdf") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="norCheck">Normandie</label>
        <input type="checkbox" name="norCheck" id="norCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "nor") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="idfCheck">Îles-de-france</label>
        <input type="checkbox" name="idfCheck" id="idfCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "idf") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="gesCheck">Grand Est</label>
        <input type="checkbox" name="gesCheck" id="gesCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "ges") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="breCheck">Bretagne</label>
        <input type="checkbox" name="breCheck" id="breCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "bre") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="pdlCheck">Pays de la Loire</label>
        <input type="checkbox" name="pdlCheck" id="pdlCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "pdl") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="cvlCheck">Centre-Val de Loire</label>
        <input type="checkbox" name="cvlCheck" id="cvlCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "cvl") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="bfcCheck">Bourgogne-Franche-Comté</label>
        <input type="checkbox" name="bfcCheck" id="bfcCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "bfc") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="naqCheck">Nouvelle-Aquitaine</label>
        <input type="checkbox" name="naqCheck" id="naqCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "naq") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="araCheck">Auvergne-Rhône-Alpes</label>
        <input type="checkbox" name="araCheck" id="araCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "ara") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="occCheck">Occitanie</label>
        <input type="checkbox" name="occCheck" id="occCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "occ") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="pacCheck">Provence-Alpes-Côte d'Azur</label>
        <input type="checkbox" name="pacCheck" id="pacCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "pac") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="corCheck">Corse</label>
        <input type="checkbox" name="corCheck" id="corCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "cor") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="gufCheck">Guyane Française</label>
        <input type="checkbox" name="gufCheck" id="gufCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "guf") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="reuCheck">Réunion</label>
        <input type="checkbox" name="reuCheck" id="reuCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "reu") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="glpCheck">Guadeloupe</label>
        <input type="checkbox" name="glpCheck" id="glpCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "glp") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="mtqCheck">Martinique</label>
        <input type="checkbox" name="mtqCheck" id="mtqCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "mtq") :?> checked <?php endif ?>>
    </div>
    <div>
        <label for="mytCheck">Mayotte</label>
        <input type="checkbox" name="mytCheck" id="mytCheck" onchange="checkFiltresAgences()" <?php if (substr($url[4], 7) == "myt") :?> checked <?php endif ?>>
    </div>
</aside>

<section class="section_agences">
    <input type="text" placeholder="Rechercher via la ville ou le code postal" onkeyup="checkFiltresAgences()" class="rechercheAgence">
    <section>
        <?php for($i=0; $i<count($agences); $i++) : ?>
                <article class="articleAgence articleAgence<?= $i+1 ?>">
                    <div><p><strong>Ville :</strong> <?= $agences[$i]->getville() ?></p></div>
                    <div><p><strong>Code Postal:</strong> <?= $agences[$i]->getcodePostal() ?></p></div>
                    <div><p><strong>Region :</strong> <?= $agences[$i]->getregion() ?></p></div>
                    <div><p><strong>Numéro de téléphone de l'agence :</strong> <?= $agences[$i]->getnumAgence() ?></p></div>
                    <div><p><strong>Adresse mail de l'agence :</strong> <?= $agences[$i]->getmailAgence() ?></p></div>
                    <div><p><strong>Horaires de l'agence :</strong> <?= substr($agences[$i]->getouverture(), 0, 5) ?> - <?= substr($agences[$i]->getfermeture(), 0, 5)  ?></p></div>
                </article>
        <?php endfor ?>
    </section>
</section>


<?php
$content = ob_get_clean();
require "views/template.php";
?>