<?php
session_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controller/vehiculesController.php";
require_once "controller/clientsController.php";
$vehiculesController = new vehiculesController();
$clientsController = new clientsController();



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
            else if($url[1] === "a"){
                $vehiculesController->ajoutVehicule();
            }
            else if($url[1] === "d"){
                $vehiculesController->suppressionVehicule($url[2]);
            }
            break;
        case substr($url[0], 0, 8) == "vehicule" :
            
            $vehiculesController->afficherVehicule(intval(substr($url[0], 8)));
            break;
        case "connexion" :
            if (empty($url[1])){
                require "views/connexion.php";
            }
            break;
        case "inscription" :
            if (empty($url[1])){
                $_SESSION["mdpDif"] = "";
                require "views/inscription.php";
            }
            else if($url[1] === "i"){
                $clientsController->ajoutClient();
            }
            break;
    }
}