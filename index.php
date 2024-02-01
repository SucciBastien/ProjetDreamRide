<?php

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controller/vehiculesController.php";
$vehiculesController = new vehiculesController();



if(empty($_GET['page'])){
    require_once "views/accueil.view.php";
} else {
    $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
    switch($url[0]){
        case "accueil" : 
            require_once "views/accueil.view.php";
            break;
        case "vehicules" :
            if (empty($url[1])){
                $vehiculesController->afficherVehicules();
            }
            else if($url[1] === "m"){
                $vehiculesController->modificationVehicule($url[2]);
            }
            break;
    }
}