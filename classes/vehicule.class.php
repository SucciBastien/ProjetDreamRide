<?php

class vehicule{

    public function __construct(private int $idVehicule/*, private image $photo*/, private float $prix, private int $siege, private int $porte, private bool $estManuel, private bool $clim, private int $annee, private int $idModel, private int $idTypeVehicule)
    {
        
    }

    public function getidVehicule(){return $this->idVehicule;}
    // public function getphoto(){return $this->photo;}
    public function getprix(){return $this->prix;}
    public function getsiege(){return $this->siege;}
    public function getporte(){return $this->porte;}
    public function getestManuel(){return $this->estManuel;}
    public function getclim(){return $this->clim;}
    public function getannee(){return $this->annee;}
    public function getidModel(){return $this->idModel;}
    public function getidTypeVehicule(){return $this->idTypeVehicule;}

    public function setidVehicule($x){return $this->idVehicule = $x;}
    // public function setphoto($x){return $this->photo;}
    public function setprix($x){return $this->prix = $x;}
    public function setsiege($x){return $this->siege = $x;}
    public function setporte($x){return $this->porte = $x;}
    public function setestManuel($x){return $this->estManuel = $x;}
    public function setclim($x){return $this->clim = $x;}
    public function setannee($x){return $this->annee = $x;}
    public function setidModel($x){return $this->idModel = $x;}
    public function setidTypeVehicule($x){return $this->idTypeVehicule = $x;}

}