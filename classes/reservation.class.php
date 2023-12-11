<?php

class reservation{

    public function __construct(private int $idReservation, private string $dateDebut, private string $dateFin)
    {
        
    }

    public function getidReservation(){return $this->idReservation;}
    public function getdateDebut(){return $this->dateDebut;}
    public function getdateFin(){return $this->dateFin;}

    public function setidReservation($x){$this->idReservation = $x;}
    public function setdateDebut($x){$this->dateDebut = $x;}
    public function setdateFin($x){$this->dateFin = $x;}

}