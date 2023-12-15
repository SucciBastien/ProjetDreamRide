<?php

require_once "Models/typesVehiculeManager.class.php";
require_once "Models/Model.class.php";

class typesVehiculeController{

    private $typesVehiculeManager;

    public function __construct()
    {
        $this->typesVehiculeManager = new typeVehiculeManager;
        $this->typesVehiculeManager->chargementTypesVehicules();
    }

    public function afficherTypesVehicule(){
        $typesVehicule = $this->typesVehiculeManager->getTypesVehicule();
        require "views/vehicules.view.php";
    }

}