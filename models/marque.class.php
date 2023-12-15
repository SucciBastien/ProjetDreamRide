<?php

class marque{

    public function __construct(private int $idMarque, private string $nomMarque)
    {
        
    }

    public function getidMarque(){return $this->idMarque;}
    public function getnomMarque(){return $this->nomMarque;}

    public function setidMarque($x){$this->idMarque = $x;}
    public function setnomMarque($x){$this->nomMarque = $x;}

}