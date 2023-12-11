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

    public function setidAgence($x){$this->idAgence = $x;}
    public function setville($x){$this->ville = $x;}
    public function setcodePostal($x){$this->codePostal = $x;}
    public function setregion($x){$this->region = $x;}
    public function setnumAgence($x){$this->numAgence = $x;}
    public function setmailAgence($x){$this->mailAgence = $x;}
    public function setouverture($x){$this->ouverture = $x;}
    public function setfermeture($x){$this->fermeture = $x;}
    public function setidManager($x){$this->idManager = $x;}

    


}