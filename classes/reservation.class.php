<?php

class reservation{

    public function __construct(private int $idReservation, private string $dateDebut, private string $dateFin)
    {
        
    }

    public function getidReservation(){return $this->idReservation;}
    public function getdateDebut(){return $this->dateDebut;}
    public function getdateFin(){return $this->dateFin;}

    public function setidReservation($x){return $this->idReservation = $x;}
    public function setdateDebut($x){return $this->dateDebut = $x;}
    public function setdateFin($x){return $this->dateFin = $x;}

}