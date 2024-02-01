<?php

require_once "Models/modelVehiculeManager.class.php";
require_once "Models/Model.class.php";

class modelsVehiculeController{

    private $modelsVehiculeManager;

    public function __construct()
    {
        $this->modelsVehiculeManager = new modelVehiculeManager;
        $this->modelsVehiculeManager->chargementModelsVehicule();
    }

    public function afficherModelsVehicule(){
        $modelsVehicule = $this->modelsVehiculeManager->getModelsVehicule();
        return $modelsVehicule;
    }

}