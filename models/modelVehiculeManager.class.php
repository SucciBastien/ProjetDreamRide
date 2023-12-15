<?php

require_once "models/Model.class.php";
require_once "models/modelVehicule.class.php";

class modelVehiculeManager extends BDConnexion{

    private $modelsVehicule;

    public function __construct()
    {
        
    }

    public function ajoutModelVehicule($x){$this->modelsVehicule[] = $x;}

    public function getModelsVehicule(){return $this->modelsVehicule;}

    public function chargementModelsVehicule(){
        $req = $this->getBdd()->prepare('SELECT * FROM modelVehicule');

        $req->execute();

        $mesmodelsVehicule = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mesmodelsVehicule as $value){
            $modelsVehicule = new modelVehicule($value['idModel'], $value['nomModel'], $value['carburant'], $value['cylindree'], $value['nbCylindre'], $value['accel'], $value['puiMax'], $value['regPuiMax'], $value['coupleMax'], $value['regCoupleMax'], $value['longueur'], $value['hauteur'], $value['empatement'], $value['volCoffre'], $value['reservoir'], $value['poids'], $value['anneeModel'], $value['idMarque']);
            $this->ajoutModelVehicule($modelsVehicule);
        }

    }

}