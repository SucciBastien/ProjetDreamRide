<?php

class reservation{

    public function __construct(private int $idVehicule, private int $idClient, private string $dateDebut, private string $dateFin)
    {
        
    }

    public function getidVehicule(){return $this->idVehicule;}
    public function getidClient(){return $this->idClient;}
    public function getdateDebut(){return $this->dateDebut;}
    public function getdateFin(){return $this->dateFin;}

    public function setidVehicule($x){$this->idVehicule = $x;}
    public function setidClient($x){$this->idClient = $x;}
    public function setdateDebut($x){$this->dateDebut = $x;}
    public function setdateFin($x){$this->dateFin = $x;}

}