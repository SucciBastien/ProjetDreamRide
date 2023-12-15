<?php

require_once "Models/contenirManager.class.php";
require_once "Models/Model.class.php";

class contenirsController{

    private $contenirManager;

    public function __construct()
    {
        $this->contenirManager = new contenirManager;
        $this->contenirManager->chargementContenirs();
    }

    public function afficherContenir(){
        $contenirs = $this->contenirManager->getContenirs();
        require "views/vehicules.view.php";
    }

}