<?php

require_once "models/Model.class.php";
require_once "models/client.class.php";

class clientManager extends BDConnexion{

    private $clients;

    public function __construct()
    {
        
    }

    public function ajoutClient($x){$this->clients[] = $x;}

    public function getClients(){return $this->clients;}

    public function chargementClients(){
        $req = $this->getBdd()->prepare('SELECT * FROM client');

        $req->execute();

        $mesclients = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mesclients as $value){
            $client = new client($value['idClient'], $value['nomClient'], $value['prenomClient'], $value['numClient'], $value['mailClient'], $value['identifiantClient'], $value['mdpClient']);
            $this->ajoutClient($client);
        }

    }

}