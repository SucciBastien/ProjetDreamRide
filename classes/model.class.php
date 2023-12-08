<?php

class model{

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

    public function setidModel($x){return $this->idModel = $x;}
    public function setnomModel($x){return $this->nomModel = $x;}
    public function setcarburant($x){return $this->carburant = $x;}
    public function setcylindree($x){return $this->cylindree = $x;}
    public function setnbCylindre($x){return $this->nbCylindre = $x;}
    public function setaccel($x){return $this->accel = $x;}
    public function setpuiMax($x){return $this->puiMax = $x;}
    public function setregPuiMax($x){return $this->regPuiMax = $x;}
    public function setcoupleMax($x){return $this->coupleMax = $x;}
    public function setregCoupleMax($x){return $this->regCoupleMax = $x;}
    public function setlongueur($x){return $this->longueur = $x;}
    public function sethauteur($x){return $this->hauteur = $x;}
    public function setvolCoffre($x){return $this->volCoffre = $x;}
    public function setreservoir($x){return $this->reservoir = $x;}
    public function setpoids($x){return $this->poids = $x;}
    public function setanneeModel($x){return $this->anneeModel = $x;}
    public function setidMarque($x){return $this->idMarque = $x;}

}