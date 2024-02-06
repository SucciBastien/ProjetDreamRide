<?php

require_once "models/Model.class.php";
require_once "models/typeVehicule.class.php";

class typeVehiculeManager extends BDConnexion{

    private $typesVehicule;

    public function __construct()
    {
        
    }

    public function ajoutTypeVehicule($x){$this->typesVehicule[] = $x;}

    public function getTypesVehicule(){return $this->typesVehicule;}

    public function getTypeVehiculeById($id){
        for($i=0; $i<count($this->typesVehicule); $i++){
            if($this->typesVehicule[$i]->getidTypeVehicule() == $id){
                return $this->typesVehicule[$i];
            }
        }
    }

    public function chargementTypesVehicules(){
        $req = $this->getBdd()->prepare('SELECT * FROM typeVehicule');

        $req->execute();

        $mesTypesVehicule = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mesTypesVehicule as $value){
            $typeVehicule = new typeVehicule($value['idTypeVehicule'], $value['nomTypeVehicule']);
            $this->ajoutTypeVehicule($typeVehicule);
        }

    }

}