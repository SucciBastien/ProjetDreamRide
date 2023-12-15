<?php

require_once "Models/agenceManager.class.php";
require_once "Models/Model.class.php";

class agencesController{

    private $agenceManager;

    public function __construct()
    {
        $this->agenceManager = new agenceManager;
        $this->agenceManager->chargementAgences();
    }

    public function afficherAgence(){
        $agences = $this->agenceManager->getAgences();
        require "views/vehicules.view.php";
    }

}