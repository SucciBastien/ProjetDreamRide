<?php

require_once "Models/louerManager.class.php";
require_once "Models/Model.class.php";

class louersController{

    private $louerManager;

    public function __construct()
    {
        $this->louerManager = new louerManager;
        $this->louerManager->chargementLouers();
    }

    public function afficherLouer(){
        $louers = $this->louerManager->getLouers();
        require "views/vehicules.view.php";
    }

}