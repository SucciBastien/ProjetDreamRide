<?php

require_once "Models/adminManager.class.php";
require_once "Models/Model.class.php";

class adminsController{

    private $adminManager;

    public function __construct()
    {
        $this->adminManager = new adminManager;
        $this->adminManager->chargementAdmins();
    }

    public function afficherAdmin(){
        $admins = $this->adminManager->getAdmins();
        require "views/vehicules.view.php";
    }

}