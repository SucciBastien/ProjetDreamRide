<?php

class manager{

    public function __construct( private int $idManager, private string $nomManager, private string $prenomManager, private string $numManager, private string $mailManager, private string $identifiantManager, private string $mdpManager )
    {
        
    }

    public function getidManager(){return $this->idManager;}
    public function getnomManager(){return $this->nomManager;}
    public function getprenomManager(){return $this->prenomManager;}
    public function getnumManager(){return $this->numManager;}
    public function getmailManager(){return $this->mailManager;}
    public function getidentifiantManager(){return $this->identifiantManager;}
    public function getmdpManager(){return $this->mdpManager;}

    public function setidManager($x){return $this->idManager = $x;}
    public function setnomManager($x){return $this->nomManager = $x;}
    public function setprenomManager($x){return $this->prenomManager = $x;}
    public function setnumManager($x){return $this->numManager = $x;}
    public function setmailManager($x){return $this->mailManager = $x;}
    public function setidentifiantManager($x){return $this->identifiantManager = $x;}
    public function setmdpManager($x){return $this->mdpManager = $x;}

}