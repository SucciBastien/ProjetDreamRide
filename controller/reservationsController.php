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

}