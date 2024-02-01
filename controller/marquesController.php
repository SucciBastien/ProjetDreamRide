<?php

require_once "Models/marqueManager.class.php";
require_once "Models/Model.class.php";

class marquesController{

    private $marqueManager;

    public function __construct()
    {
        $this->marqueManager = new marqueManager;
        $this->marqueManager->chargementMarques();
    }

    public function afficherMarque(){
        $marques = $this->marqueManager->getmarques();
        return $marques;
    }

}