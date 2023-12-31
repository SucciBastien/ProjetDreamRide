<?php

require_once "models/Model.class.php";
require_once "models/marque.class.php";

class marqueManager extends BDConnexion{

    private $marques;

    public function __construct()
    {
        
    }

    public function ajoutMarque($x){$this->marques[] = $x;}

    public function getMarques(){return $this->marques;}

    public function chargementMarques(){
        $req = $this->getBdd()->prepare('SELECT * FROM marque');

        $req->execute();

        $mesMarques = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mesMarques as $value){
            $marque = new marque($value['idMarque'], $value['nomMarque']);
            $this->ajoutMarque($marque);
        }

    }

}