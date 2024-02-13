<?php

require_once "Models/vehiculeManager.class.php";
require_once "Models/Model.class.php";

class vehiculesController{

    private $vehiculeManager;

    public function __construct()
    {
        $this->vehiculeManager = new vehiculeManager;
        $this->vehiculeManager->chargementVehicules();
    }

    public function afficherVehicules(){
        $vehicules = $this->vehiculeManager->getVehicules();
        require "views/vehicules.view.php";
    }

    public function afficherVehicule($id){
        $vehicule = $this->vehiculeManager->getVehiculeById($id);
        require "Views/vehicule.view.php";
    }

    public function modificationVehicule($id){
        $vehicule = $this->vehiculeManager->getvehiculeById($id);
        if ($_POST["nouveauEstManuel"] == "true"){
            $manuel = 1;
        }
        else{
            $manuel = 0;
        }
        if ($_POST["nouveauClim"] == "true"){
            $clim = 1;
        }
        else{
            $clim = 0;
        }
        $nomImage = $this->vehiculeManager->getVehiculeById($_POST["identifiant"])->getphoto();
        unlink("public/img/" . $nomImage);
        $file = $_FILES["nouveauImage"];
        $repertoire = "public/img/";
        $nomImageAjoute = $this->ajoutImage($file, $repertoire);
        $this->vehiculeManager->modificationvehiculeBDD($_POST["identifiant"], $nomImageAjoute, $_POST["nouveauPrix"], $_POST["nouveauNbSiege"], $_POST["nouveauNbPorte"], $manuel, $clim, $_POST["nouveauCirculation"], $_POST["nouveauIdModel"], $_POST["nouveauIdTypeVehicule"]);
        header('Location: ' . URL . "vehicules");
    }

    public function ajoutVehicule(){
        if ($_POST["EstManuel"] == "true"){
            $manuel = 1;
        }
        else{
            $manuel = 0;
        }
        if ($_POST["Clim"] == "true"){
            $clim = 1;
        }
        else{
            $clim = 0;
        }
        $file = $_FILES["image"];
        $repertoire = "public/img/";
        $nomImageAjoute = $this->ajoutImage($file, $repertoire);
        $this->vehiculeManager->ajoutVehiculeBDD($nomImageAjoute, $_POST["Prix"], $_POST["NbSiege"], $_POST["NbPorte"], $manuel, $clim, $_POST["Circulation"], $_POST["idModel"], $_POST["idTypeVehicule"]);
        header('Location: ' . URL . "vehicules");
    }

    public function ajoutImage($file, $dir){
        //Va d'abord vérifier si on a renseigné une image dans le formulaire
        if (!isset($file["name"]) || empty($file["name"])){
            //si c'est ne pas le cas, on aurons une première erreur
            throw new Exception("Vous devez indiquer une image");
        }

        //Ensuite, il va vérifier si le répertoire public/image existe
        //Si c'est pas le cas il va le créer avec les droits 0777
        if(!file_exists($dir)){
            mkdir($dir, 0777);
        }

        $target_file = $dir . $file["name"];
        //On récupère l'extension du fichier
        $extension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
        
        //Ensuite je fais différents tests pour vérifier que le fichier correspond bien à ce qui est attendu
        if(!getimagesize($file["tmp_name"])){
            throw new Exception("Le fichier n'est pas une image");
        }
        if($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif"){
            throw new Exception("L'extension du fichier n'est pas reconnu");
        }
        if(file_exists($target_file)){
            throw new Exception("Le fichier existe déjà");
        }
        if($file['size'] > 500000){
            throw new Exception("Le fichier est trop gros");
        }
        //Va permettre de rajouter notre image directement dans le dossier
        if(!move_uploaded_file($file['tmp_name'], $target_file)){
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        }
        //Si jamais tout c'est bien passé, on enverra le nom de l'image
        else return ($file['name']);

    }

    public function suppressionVehicule($id){
        //recuperation du nom de l'image
        $nomImage = $this->vehiculeManager->getVehiculeById($id)->getphoto();

        // supression de l'image dans le repertoire concerné
        unlink("public/img/" . $nomImage);

        // suppression de vehicule dans la BD
        $this->vehiculeManager->suppressionVehiculeBDD($id);

        //Redirection vers la page des vehicules
        header("Location: " . URL . "vehicules");
    }
    

}
