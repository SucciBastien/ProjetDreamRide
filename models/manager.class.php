<?php

class manager{

    private array $models;
    private array $vehicules;
    private array $clients;

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

    public function setidManager($x){$this->idManager = $x;}
    public function setnomManager($x){$this->nomManager = $x;}
    public function setprenomManager($x){$this->prenomManager = $x;}
    public function setnumManager($x){$this->numManager = $x;}
    public function setmailManager($x){$this->mailManager = $x;}
    public function setidentifiantManager($x){$this->identifiantManager = $x;}
    public function setmdpManager($x){$this->mdpManager = $x;}

    public function ajoutModel($x){$this->models = $x;}
    public function ajoutVehicule($x){$this->vehicules = $x;}
    public function ajoutClient($x){$this->clients = $x;}

}