<?php

require_once "Models/clientManager.class.php";
require_once "Models/Model.class.php";

class clientsController{

    private $clientManager;

    public function __construct()
    {
        $this->clientManager = new clientManager;
        $this->clientManager->chargementClients();
    }

    public function afficherClient(){
        $clients = $this->clientManager->getClients();
        require "views/vehicules.view.php";
    }

}