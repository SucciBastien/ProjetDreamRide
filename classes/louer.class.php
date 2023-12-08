<?php

class louer{

    public function __construct(private int $idVehicule, private int $idClient, private int $idReservation)
    {
        
    }

    public function getidVehicule(){return $this->idVehicule;}
    public function getidClient(){return $this->idClient;}
    public function getidReservation(){return $this->idReservation;}

    public function setidVehicule($x){return $this->idVehicule = $x;}
    public function setidClient($x){return $this->idClient = $x;}
    public function setidReservation($x){return $this->idReservation = $x;}

}