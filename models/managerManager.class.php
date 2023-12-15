<?php

require_once "models/Model.class.php";
require_once "models/manager.class.php";

class managerManager extends BDConnexion{

    private $managers;

    public function __construct()
    {
        
    }

    public function ajoutManager($x){$this->managers[] = $x;}

    public function getManagers(){return $this->managers;}

    public function chargementManagers(){
        $req = $this->getBdd()->prepare('SELECT * FROM manager');

        $req->execute();

        $mesmanagers = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mesmanagers as $value){
            $manager = new manager($value['idManager'], $value['nomManager'], $value['prenomManager'], $value['numManager'], $value['mailManager'], $value['identifiantManager'], $value['mdpManager']);
            $this->ajoutManager($manager);
        }

    }

}