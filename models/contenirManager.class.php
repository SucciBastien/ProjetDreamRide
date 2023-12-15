<?php

require_once "models/Model.class.php";
require_once "models/contenir.class.php";

class contenirManager extends BDConnexion{

    private $contenirs;

    public function __construct()
    {
        
    }

    public function ajoutContenir($x){$this->contenirs[] = $x;}

    public function getContenirs(){return $this->contenirs;}

    public function chargementContenirs(){
        $req = $this->getBdd()->prepare('SELECT * FROM contenir');

        $req->execute();

        $mescontenirs = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mescontenirs as $value){
            $contenir = new contenir($value['idAgence'], $value['nomVehicule']);
            $this->ajoutContenir($contenir);
        }

    }

}