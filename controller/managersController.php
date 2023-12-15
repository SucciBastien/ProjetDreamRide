<?php

require_once "Models/managerManager.class.php";
require_once "Models/Model.class.php";

class managersController{

    private $managerManager;

    public function __construct()
    {
        $this->managerManager = new managerManager;
        $this->managerManager->chargementManagers();
    }

    public function afficherManager(){
        $managers = $this->managerManager->getManagers();
        require "views/vehicules.view.php";
    }

}