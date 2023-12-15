<?php

require_once "Models/vehiculeManager.class.php";
require_once "Models/Model.class.php";

class vehiculesController{

    private $vehiculeManager;

    public function __construct()
    {
        $this->vehiculeManager = new vehiculeManager;
        $this->vehiculeManager->chargementVehicules();
    }

    public function afficherVehicule(){
        $vehicules = $this->vehiculeManager->getVehicules();
        require "views/vehicules.view.php";
    }

}