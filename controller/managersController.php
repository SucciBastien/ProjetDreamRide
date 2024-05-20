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

    public function connexionManager(){
        foreach($this->managerManager->getManagers() as $manager){
            
            if ($_POST["identifiantConnexion"] == $manager->getidentifiantManager() && $_POST["mdpConnexion"] == $manager->getmdpManager()){
                $_SESSION["compte"] = "manager";
                $_SESSION["nomCompte"] = $manager->getnomManager();
                $_SESSION["prenomCompte"] = $manager->getprenomManager();
                $_SESSION["numCompte"] = $manager->getnumManager();
                $_SESSION["mailCompte"] = $manager->getmailManager();
                $_SESSION["identifiantCompte"] = $manager->getidentifiantManager();
                $_SESSION["mdpCompte"] = $manager->getmdpManager();
                header("Location: http://localhost:8000//accueil");
            }
            else{
                $_SESSION["connexion"] = "Identifiant et mot de passe incorrect !";
                header("Location: http://localhost:8000//connexion");
            }
        }
        
    }

}