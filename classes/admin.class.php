<?php

class Admin{

    public function __construct(private int $idAdmin, private string $nomAdmin, private string $prenomAdmin, private string $numAdmin, private string $mailAdmin, private string $identifiantAdmin, private string $mdpAdmin)
    {
        
    }

    public function getidAdmin(){return $this->idAdmin;}
    public function getnomAdmin(){return $this->nomAdmin;}
    public function getprenomAdmin(){return $this->prenomAdmin;}
    public function getnumAdmin(){return $this->numAdmin;}
    public function getmailAdmin(){return $this->mailAdmin;}
    public function getidentifiantAdmin(){return $this->identifiantAdmin;}
    public function getmdpAdmin(){return $this->mdpAdmin;}

    public function setidAdmin($x){return $this->idAdmin = $x;}
    public function setnomAdmin($x){return $this->nomAdmin  = $x;}
    public function setprenomAdmin($x){return $this->prenomAdmin  = $x;}
    public function setnumAdmin($x){return $this->numAdmin  = $x;}
    public function setmailAdmin($x){return $this->mailAdmin  = $x;}
    public function setidentifiantAdmin($x){return $this->identifiantAdmin  = $x;}
    public function setmdpAdmin($x){return $this->mdpAdmin  = $x;}

}