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

    public function getvehiculeById($id){
        for($i=0; $i<count($this->vehicules); $i++){
            if($this->vehicules[$i]->getidVehicule() == $id){
                return $this->vehicules[$i];
            }
        }
    }

    public function modificationVehiculeBD($id, $prix, $siege, $porte, $estManuel, $clim, $annee){
        $req = "UPDATE vehicule SET prix = :prix, siege = :siege, porte = :porte, estManuel = :estManuel, clim = :clim, annee = :annee WHERE idvehicule = :idvehicule;";

        $stmt = $this->getBDD()->prepare($req);

        $stmt->bindValue(":idvehicule", $id, PDO::PARAM_INT);
        $stmt->bindValue(":prix", $prix, PDO::PARAM_STR);
        $stmt->bindValue(":siege", $siege, PDO::PARAM_INT);
        $stmt->bindValue(":porte", $porte, PDO::PARAM_INT);
        $stmt->bindValue(":estManuel", $estManuel, PDO::PARAM_INT);
        $stmt->bindValue(":clim", $clim, PDO::PARAM_INT);
        $stmt->bindValue(":annee", $annee, PDO::PARAM_INT);

        $resultat = $stmt->execute();

        $stmt->closeCursor();

        if($resultat > 0){
            $this->getvehiculeById($id)->setprix($prix);
            $this->getvehiculeById($id)->setsiege($siege);
            $this->getvehiculeById($id)->setporte($porte);
            $this->getvehiculeById($id)->setestManuel($estManuel);
            $this->getvehiculeById($id)->setclim($clim);
            $this->getvehiculeById($id)->setannee($annee);
        }
    }

}