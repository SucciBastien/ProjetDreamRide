<?php

require_once "models/Model.class.php";
require_once "models/louer.class.php";


class reservationManager extends BDConnexion{

    private $reservations;

    public function __construct()
    {
        
    }

    public function ajoutReservation($x){$this->reservations[] = $x;}

    public function getReservations(){return $this->reservations;}

    public function chargementReservations(){
        $req = $this->getBdd()->prepare('SELECT * FROM reservation');

        $req->execute();

        $mesReservations = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mesReservations as $value){
            $reservation = new reservation($value['idVehicule'], $value['idClient'], $value['dateDebut'], $value['dateFin']);
            $this->ajoutReservation($reservation);
        }

    }

}