<?php

require_once "Models/vehiculeManager.class.php";
require_once "Models/Model.class.php";

class vehiculesController{

    private $vehiculeManager;

    public function __construct()
    {
        $this->vehiculeManager = new vehiculeManager;
        $this->vehiculeManager->chargementVehicules();
    }

    public function afficherVehicules(){
        $vehicules = $this->vehiculeManager->getVehicules();
        require "views/vehicules.view.php";
    }

    public function afficherVehicule($id){
        $vehicule = $this->vehiculeManager->getVehiculeById($id);
        require "Views/afficherVehicule.view.php";
    }

    public function modificationVehicule($id){
        $vehicule = $this->vehiculeManager->getvehiculeById($id);
        if ($_POST["nouveauEstManuel"] == "true"){
            $manuel = 1;
        }
        else{
            $manuel = 0;
        }
        if ($_POST["nouveauClim"] == "true"){
            $clim = 1;
        }
        else{
            $clim = 0;
        }
        $this->vehiculeManager->modificationvehiculeBDD($_POST["identifiant"], $_POST["nouveauPrix"], $_POST["nouveauNbSiege"], $_POST["nouveauNbPorte"], $manuel, $clim, $_POST["nouveauCirculation"]);
        header('Location: ' . URL . "vehicules");
    }

    public function ajoutVehicule(){
        if ($_POST["EstManuel"] == "true"){
            $manuel = 1;
        }
        else{
            $manuel = 0;
        }
        if ($_POST["Clim"] == "true"){
            $clim = 1;
        }
        else{
            $clim = 0;
        }

        $this->vehiculeManager->ajoutVehiculeBDD($_FILES["image"]["name"], $_POST["Prix"], $_POST["NbSiege"], $_POST["NbPorte"], $manuel, $clim, $_POST["Circulation"], $_POST["idModel"], $_POST["idTypeVehicule"]);
    }

}