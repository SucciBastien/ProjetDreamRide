<?php

require_once "models/Model.class.php";
require_once "models/vehicule.class.php";

class vehiculeManager extends BDConnexion{

    private $vehicules;

    public function __construct()
    {
        
    }

    public function ajoutVehicule($x){$this->vehicules[] = $x;}

    public function getVehicules(){return $this->vehicules;}

    public function chargementVehicules(){
        $req = $this->getBdd()->prepare('SELECT * FROM vehicule');

        $req->execute();

        $mesVehicules = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mesVehicules as $value){
            $vehicule = new vehicule($value['idVehicule'], $value['photo'], $value['prix'], $value['siege'], $value['porte'], $value['estManuel'], $value['clim'], $value['annee'], $value['idModel'], $value['idTypeVehicule']);
            $this->ajoutVehicule($vehicule);
        }

    }

}