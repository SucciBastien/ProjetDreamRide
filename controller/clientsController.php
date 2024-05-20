<?php

require_once "models/clientManager.class.php";
require_once "models/Model.class.php";
require_once "controller/managersController.php";

class clientsController{

    private $clientManager;
    private $managersController;

    public function __construct()
    {
        $this->clientManager = new clientManager;
        $this->clientManager->chargementClients();
        $this->managersController = new managersController();
    }

    public function afficherClient(){
        $clients = $this->clientManager->getClients();
    }

    public function ajoutClient(){
        if ($_POST["mdp"] == $_POST["mdpConfirm"]){
            $this->clientManager->ajoutClientBDD($_POST["nom"], $_POST["prenom"], $_POST["num"], $_POST["mail"], $_POST["identifiant"], password_hash($_POST["mdp"], PASSWORD_DEFAULT) );
            $_SESSION["mdpDif"] = "";
            header("Location: http://localhost:8000//connexion");
        }
        else{
            $_SESSION["mdpDif"] = "Mots de passe différents !";
            header("Location: http://localhost:8000//inscription");
        }
    }

    public function connexionClient(){
        foreach($this->clientManager->getClients() as $client){
            if ($_POST["identifiantConnexion"] == $client->getidentifiantClient() && password_verify($_POST["mdpConnexion"], $client->getmdpClient())){
                $_SESSION["idClient"] = $client->getidClient();
                $_SESSION["compte"] = "client";
                $_SESSION["nomcompte"] = $client->getnomClient();
                $_SESSION["prenomCompte"] = $client->getprenomClient();
                $_SESSION["numCompte"] = $client->getnumClient();
                $_SESSION["mailCompte"] = $client->getmailClient();
                $_SESSION["identifiantCompte"] = $client->getidentifiantClient();
                $_SESSION["mdpCompte"] = $client->getmdpClient();
                header("Location: http://localhost:8000//accueil");
            }
            else{
                $this->managersController->connexionManager();
            }
        }
        
    }
}