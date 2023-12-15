<?php

require_once "models/Model.class.php";
require_once "models/agence.class.php";

class agenceManager extends BDConnexion{

    private $agences;

    public function __construct()
    {
        
    }

    public function ajoutAgence($x){$this->agences[] = $x;}

    public function getAgences(){return $this->agences;}

    public function chargementAgences(){
        $req = $this->getBdd()->prepare('SELECT * FROM agence');

        $req->execute();

        $mesagences = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mesagences as $value){
            $agence = new agence($value['idAgence'], $value['ville'], $value['codePostal'], $value['region'], $value['numAgence'], $value['mailAgence'], $value['ouverture'], $value['fermeture'], $value['idManager']);
            $this->ajoutAgence($agence);
        }

    }

}