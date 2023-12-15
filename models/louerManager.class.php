<?php

require_once "models/Model.class.php";
require_once "models/louer.class.php";


class louerManager extends BDConnexion{

    private $louers;

    public function __construct()
    {
        
    }

    public function ajoutLouer($x){$this->louers[] = $x;}

    public function getLouers(){return $this->louers;}

    public function chargementLouers(){
        $req = $this->getBdd()->prepare('SELECT * FROM louer');

        $req->execute();

        $meslouers = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($meslouers as $value){
            $louer = new louer($value['idVehicule'], $value['idClient'], $value['idReservation']);
            $this->ajoutLouer($louer);
        }

    }

}