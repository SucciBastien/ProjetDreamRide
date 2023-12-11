<?php

class contenir{

    public function __construct(private int $idAgence, private int $idVehicule)
    {
        
    }

    public function getidAgence(){return $this->idAgence;}
    public function getidVehicule(){return $this->idVehicule;}

    public function setidAgence($x){$this->idAgence = $x;}
    public function setidVehicule($x){$this->idVehicule = $x;}

}