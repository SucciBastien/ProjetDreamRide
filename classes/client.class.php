<?php

class client{

    public function __construct(private int $idClient, private string $nomClient, private string $prenomClient, private string $numClient, private string $mailClient, private string $identifiantClient, private string $mdpClient)
    {
        
    }

    public function getidClient(){return $this->idClient;}
    public function getnomClient(){return $this->nomClient;}
    public function getprenomClient(){return $this->prenomClient;}
    public function getnumClient(){return $this->numClient;}
    public function getmailClient(){return $this->mailClient;}
    public function getidentifiantClient(){return $this->identifiantClient;}
    public function getmdpClient(){return $this->mdpClient;}

    public function setidClient($x){$this->idClient = $x;}
    public function setnomClient($x){$this->nomClient  = $x;}
    public function setprenomClient($x){$this->prenomClient  = $x;}
    public function setnumClient($x){$this->numClient  = $x;}
    public function setmailClient($x){$this->mailClient  = $x;}
    public function setidentifiantClient($x){$this->identifiantClient  = $x;}
    public function setmdpClient($x){$this->mdpClient  = $x;}

}