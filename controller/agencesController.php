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

    public function afficherAgences(){
        $agences = $this->agenceManager->getAgences();
        require "views/agences.view.php";
    }

    public function afficherAgence($id){
        $agence = $this->agenceManager->getagenceById($id);
        require "Views/agence.view.php";
    }

}