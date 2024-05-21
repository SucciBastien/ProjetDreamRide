<?php

require_once "Models/reservationManager.class.php";
require_once "Models/Model.class.php";

class reservationsController{

    private $reservationManager;

    public function __construct()
    {
        $this->reservationManager = new reservationManager;
        $this->reservationManager->chargementReservations();
    }

    public function afficherReservation(){
        $reservations = $this->reservationManager->getReservations();
        require "views/vehicules.view.php";
    }

    public function ajoutReservation($idVehicule){
        $this->reservationManager->ajoutReservationBDD($idVehicule, $_SESSION["idClient"], date("Y-m-d H:i:s", strtotime($_POST["dateStartLocation"])), date("Y-m-d H:i:s", strtotime($_POST["dateEndLocation"])));
        $_SESSION["reservation"] = "Réservation éffectué";
        header("Location: http://localhost:8000//vehicule" . $idVehicule);
    }

    public function reservation($idVehicule){
        $reservations = $this->reservationManager->getReservations();
        $dateStartLocation = new DateTime($_POST["dateStartLocation"]);
        $dateEndLocation = new DateTime($_POST["dateEndLocation"]);
        foreach($reservations as $reservation){
            $dateStart = new DateTime($reservation->getdateDebut());
            $dateEnd = new DateTime($reservation->getdateFin());
            if ($idVehicule == $reservation->getidVehicule()){
                if((($dateStartLocation > $dateStart) && ($dateStartLocation < $dateEnd)) || (($dateEndLocation > $dateStart) && ($dateEndLocation < $dateEnd)) || (($dateStartLocation < $dateStart) && ($dateEndLocation > $dateEnd))){
                    $_SESSION["reservation"] = "La période " . $reservation->getdateDebut() ." - " . $reservation->getdateFin() . " est déjà occupé";
                    header("Location: http://localhost:8000//vehicule" . $idVehicule);
                    break;
                }
                else{
                    unset($_SESSION["reservation"]);
                    header("Location: http://localhost:8000//vehicule" . $idVehicule);
                }
            }
            else{
                unset($_SESSION["reservation"]);
            }
        }
        if(!isset($_SESSION["reservation"])){
            $this->ajoutReservation($idVehicule);
        }
    }

}