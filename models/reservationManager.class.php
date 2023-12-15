<?php

require_once "models/Model.class.php";
require_once "models/reservation.class.php";


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

        $mesreservations = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mesreservations as $value){
            $reservation = new reservation($value['idReservation'], $value['dateDebut'], $value['dateFin']);
            $this->ajoutReservation($reservation);
        }

    }

}