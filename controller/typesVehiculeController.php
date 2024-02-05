<?php

require_once "models/typeVehiculeManager.class.php";
require_once "models/Model.class.php";

class typesVehiculeController{

    private $typesVehiculeManager;

    public function __construct()
    {
        $this->typesVehiculeManager = new typeVehiculeManager;
        $this->typesVehiculeManager->chargementTypesVehicules();
    }

    public function afficherTypesVehicule(){
        $typesVehicule = $this->typesVehiculeManager->getTypesVehicule();
        return $typesVehicule;
    }

}