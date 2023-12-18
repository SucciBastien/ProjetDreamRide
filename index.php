<?php

require_once "controller/marquesController.php";
$marqueController = new marquesController();


if(empty($_GET['page'])){
    require_once "views/accueil.view.php";
}
else{
    switch($_GET['page']){
        case "accueil" : require "views/accueil.view.php";
        break;
        case "vehicules" : $marqueController->afficherMarque();
        break;
    }
}