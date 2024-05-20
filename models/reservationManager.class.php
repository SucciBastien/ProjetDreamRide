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

        $mesReservations = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mesReservations as $value){
            $reservation = new reservation($value['idVehicule'], $value['idClient'], $value['dateDebut'], $value['dateFin']);
            $this->ajoutReservation($reservation);
        }

    }

    public function ajoutReservationBDD($idVehicule, $idClient, $dateDebut, $dateFin){
        $req = "INSERT INTO reservation(idVehicule, idClient, dateDebut, dateFin)
        VALUES
        (:idVehicule, :idClient, :dateDebut, :dateFin)";

        $stmt = $this->getBDD()->prepare($req);

        $stmt->bindValue(":idVehicule", $idVehicule, PDO::PARAM_INT);
        $stmt->bindValue(":idClient", $idClient, PDO::PARAM_INT);
        $stmt->bindValue(":dateDebut", $dateDebut, PDO::PARAM_STR);
        $stmt->bindValue(":dateFin", $dateFin, PDO::PARAM_STR);

        $resultat = $stmt->execute();

        $stmt->closeCursor();

        if($resultat > 0){
            $reservation = new reservation($idVehicule, $idClient, $dateDebut, $dateFin);
            $this->ajoutReservation($reservation);
        }

    }

}