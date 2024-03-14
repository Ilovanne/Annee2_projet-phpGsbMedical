<?php

require_once "models/ActivModels.php";
require_once "models/MedicModels.php";
require_once "controllers/controllers.php";

if(isset($_POST['action'])){
    if($_POST['action'] === "inscription"){
        inscriptionActivite();
    }

    exit();
}

if(isset($_GET["action"])) {

    $action = $_GET["action"];
    
    switch($action) {
        case "home":
            home();
            break;
        default:
            notFound();
            break;
        
        case "medicaments":
            afficherListeMedicaments();
            break;

        case "details":
            afficherDetailsMedicament();
            break;

        case "activites":
            afficherListeActivites();
            break;
        
        case "inscription":
            afficherInscription();
            break;

        case "legal":
            afficherMentions();
            break;
    }

} else {
    home();
}


?>