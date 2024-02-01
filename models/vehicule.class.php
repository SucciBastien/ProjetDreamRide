<?php

class vehicule{

    public function __construct(private int $idVehicule, private string $photo, private float $prix, private int $siege, private int $porte, private int $estManuel, private $clim, private int $annee, private int $idModel, private int $idTypeVehicule)
    {
        
    }

    public function getidVehicule(){return $this->idVehicule;}
    public function getphoto(){return $this->photo;}
    public function getprix(){return $this->prix;}
    public function getsiege(){return $this->siege;}
    public function getporte(){return $this->porte;}
    public function getestManuel(){return $this->estManuel;}
    public function getclim(){return $this->clim;}
    public function getannee(){return $this->annee;}
    public function getidModel(){return $this->idModel;}
    public function getidTypeVehicule(){return $this->idTypeVehicule;}

    public function setidVehicule($x){$this->idVehicule = $x;}
    public function setphoto($x){$this->photo = $x;}
    public function setprix($x){$this->prix = $x;}
    public function setsiege($x){$this->siege = $x;}
    public function setporte($x){$this->porte = $x;}
    public function setestManuel($x){$this->estManuel = $x;}
    public function setclim($x){$this->clim = $x;}
    public function setannee($x){$this->annee = $x;}
    public function setidModel($x){$this->idModel = $x;}
    public function setidTypeVehicule($x){$this->idTypeVehicule = $x;}

}