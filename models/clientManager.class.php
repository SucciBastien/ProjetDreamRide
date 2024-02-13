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

    public function ajoutClientBDD($nomClient, $prenomClient, $numClient, $mailClient, $identifiantClient, $mdpClient){
        $req = "INSERT INTO client(nomClient, prenomClient, numClient, mailClient, identifiantClient, mdpClient)
        VALUES
        (:nomClient, :prenomClient, :numClient, :mailClient, :identifiantClient, :mdpClient)";

        $stmt = $this->getBDD()->prepare($req);

        $stmt->bindValue(":nomClient", $nomClient, PDO::PARAM_STR);
        $stmt->bindValue(":prenomClient", $prenomClient, PDO::PARAM_STR);
        $stmt->bindValue(":numClient", $numClient, PDO::PARAM_STR);
        $stmt->bindValue(":mailClient", $mailClient, PDO::PARAM_STR);
        $stmt->bindValue(":identifiantClient", $identifiantClient, PDO::PARAM_STR);
        $stmt->bindValue(":mdpClient", $mdpClient, PDO::PARAM_STR);

        $resultat = $stmt->execute();

        $stmt->closeCursor();

        if($resultat > 0){
            $client = new client($this->getBdd()->lastInsertId(), $nomClient, $prenomClient, $numClient, $mailClient, $identifiantClient, $mdpClient);
            $this->ajoutClient($client);
        }

    }

}