<?php

class modelVehicule{

    public function __construct(private int $idModel, private string $nomModel, private string $carburant, private float $cylindree, private int $nbCylindre, private float $accel, private int $puiMax, private int $regPuiMax, private int $coupleMax, private int $regCoupleMax, private int $longueur, private int $hauteur, private int $empatement, private int $volCoffre, private int $reservoir, private float $poids, private int $anneeModel, private int $idMarque)
    {
        
    }

    public function getidModel(){return $this->idModel;}
    public function getnomModel(){return $this->nomModel;}
    public function getcarburant(){return $this->carburant;}
    public function getcylindree(){return $this->cylindree;}
    public function getnbCylindre(){return $this->nbCylindre;}
    public function getaccel(){return $this->accel;}
    public function getpuiMax(){return $this->puiMax;}
    public function getregPuiMax(){return $this->regPuiMax;}
    public function getcoupleMax(){return $this->coupleMax;}
    public function getregCoupleMax(){return $this->regCoupleMax;}
    public function getlongueur(){return $this->longueur;}
    public function gethauteur(){return $this->hauteur;}
    public function getvolCoffre(){return $this->volCoffre;}
    public function getreservoir(){return $this->reservoir;}
    public function getpoids(){return $this->poids;}
    public function getanneeModel(){return $this->anneeModel;}
    public function getidMarque(){return $this->idMarque;}

    public function setidModel($x){$this->idModel = $x;}
    public function setnomModel($x){$this->nomModel = $x;}
    public function setcarburant($x){$this->carburant = $x;}
    public function setcylindree($x){$this->cylindree = $x;}
    public function setnbCylindre($x){$this->nbCylindre = $x;}
    public function setaccel($x){$this->accel = $x;}
    public function setpuiMax($x){$this->puiMax = $x;}
    public function setregPuiMax($x){$this->regPuiMax = $x;}
    public function setcoupleMax($x){$this->coupleMax = $x;}
    public function setregCoupleMax($x){$this->regCoupleMax = $x;}
    public function setlongueur($x){$this->longueur = $x;}
    public function sethauteur($x){$this->hauteur = $x;}
    public function setvolCoffre($x){$this->volCoffre = $x;}
    public function setreservoir($x){$this->reservoir = $x;}
    public function setpoids($x){$this->poids = $x;}
    public function setanneeModel($x){$this->anneeModel = $x;}
    public function setidMarque($x){$this->idMarque = $x;}

}