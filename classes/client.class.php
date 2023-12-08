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

    public function setidClient($x){return $this->idClient = $x;}
    public function setnomClient($x){return $this->nomClient  = $x;}
    public function setprenomClient($x){return $this->prenomClient  = $x;}
    public function setnumClient($x){return $this->numClient  = $x;}
    public function setmailClient($x){return $this->mailClient  = $x;}
    public function setidentifiantClient($x){return $this->identifiantClient  = $x;}
    public function setmdpClient($x){return $this->mdpClient  = $x;}

}