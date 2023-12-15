<?php

require_once "models/Model.class.php";
require_once "models/admin.class.php";


class adminManager extends BDConnexion{

    private $admins;

    public function __construct()
    {
        
    }

    public function ajoutAdmin($x){$this->admins[] = $x;}

    public function getAdmins(){return $this->admins;}

    public function chargementAdmins(){
        $req = $this->getBdd()->prepare('SELECT * FROM admin');

        $req->execute();

        $mesAdmins = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach($mesAdmins as $value){
            $adm = new admin($value['idAdmin'], $value['nomAdmin'], $value['prenomAdmin'], $value['numAdmin'], $value['mailAdmin'], $value['identifiantAdmin'], $value['mdpAdmin']);
            $this->ajoutAdmin($adm);
        }

    }

}