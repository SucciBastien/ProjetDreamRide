<?php

class agence{

    public function __construct(private int $idAgence, private string $ville, private int $codePostal, private string $region, private string $numAgence, private string $mailAgence, private string $ouverture, private string $fermeture, private int $idManager)
    {
        
    }

    public function getidAgence(){return $this->idAgence;}
    public function getville(){return $this->ville;}
    public function getcodePostal(){return $this->codePostal;}
    public function getregion(){return $this->region;}
    public function getnumAgence(){return $this->numAgence;}
    public function getmailAgence(){return $this->mailAgence;}
    public function getouverture(){return $this->ouverture;}
    public function getfermeture(){return $this->fermeture;}
    public function getidManager(){return $this->idManager;}

    public function setidAgence($x){return $this->idAgence = $x;}
    public function setville($x){return $this->ville = $x;}
    public function setcodePostal($x){return $this->codePostal = $x;}
    public function setregion($x){return $this->region = $x;}
    public function setnumAgence($x){return $this->numAgence = $x;}
    public function setmailAgence($x){return $this->mailAgence = $x;}
    public function setouverture($x){return $this->ouverture = $x;}
    public function setfermeture($x){return $this->fermeture = $x;}
    public function setidManager($x){return $this->idManager = $x;}

    


}