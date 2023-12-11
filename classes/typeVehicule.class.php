<?php

class typeVehicule{

    public function __construct(private int $idTypeVehicule, private string $nomTypeVehicule)
    {
        
    }

    public function getidTypeVehicule(){return $this->idTypeVehicule;}
    public function getnomTypeVehicule(){return $this->nomTypeVehicule;}
    
    public function setidTypeVehicule($x){$this->idTypeVehicule = $x;}
    public function setnomTypeVehicule($x){$this->nomTypeVehicule = $x;}

}