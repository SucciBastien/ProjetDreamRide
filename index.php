<?php
session_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controller/vehiculesController.php";
require_once "controller/agencesController.php";
require_once "controller/clientsController.php";
require_once "controller/reservationsController.php";
$vehiculesController = new vehiculesController();
$agencesController = new agencesController();
$clientsController = new clientsController();
$reservationsController = new reservationsController();

$url = explode("/", URL, FILTER_SANITIZE_URL);

if(empty($url[4])){
    require_once "views/accueil.view.php";
} else {
    
    switch($url[4]){
        case "accueil" :
            require_once "views/accueil.view.php";
            break;
        case substr($url[4], 0, 7) =="agences" :
            $agencesController->afficherAgences();
            break;
        case substr($url[4], 0, 9) == "vehicules" :
            if (empty($url[5])){
                $vehiculesController->afficherVehicules();
            }
            else if($url[5] === "m"){
                $vehiculesController->modificationVehicule($url[5]);
            }
            else if($url[5] === "a"){
                $vehiculesController->ajoutVehicule();
            }
            else if($url[5] === "d"){
                $vehiculesController->suppressionVehicule($url[5]);
            }
            break;
        case substr($url[4], 0, 8) == "vehicule" :
            if (empty($url[5])){
                $vehiculesController->afficherVehicule(intval(substr($url[4], 8)));
            }
            else if($url[5] === "r"){
                $reservationsController->reservation(intval(substr($url[4], 8)));
            }
            break;
        case "connexion" :
            if (empty($url[5])){
                require "views/connexion.php";
            }
            else if($url[5] === "c"){
                $clientsController->connexionClient();
            }
            break;
        case "inscription" :
            if (empty($url[5])){
                require "views/inscription.php";
            }
            else if($url[5] === "i"){
                $clientsController->ajoutClient();
            }
            break;
        case "deconnexion" :
            session_unset();
            header("Location: http://localhost:8000//accueil");
            break;
    }
}