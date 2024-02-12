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
    }

    public function ajoutClient(){
        if ($_POST["mdp"] == $_POST["mdpConfirm"]){
            $this->clientManager->ajoutClientBDD($_POST["nom"], $_POST["prenom"], $_POST["num"], $_POST["mail"], $_POST["identifiant"], $_POST["mdp"], );
            header('Location: ' . URL . "accueil");
        }
        else{
            echo "Mots de passe différents";
        }
    }

}