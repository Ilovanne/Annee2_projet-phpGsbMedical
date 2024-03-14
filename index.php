<?php

require_once "models/ActivModels.php";
require_once "models/MedicModels.php";
require_once "controllers/controllers.php";

if(isset($_GET["action"])) {

    $action = $_GET["action"];
    
    switch($action) {
        case "home":
            home();
            break;
        default:
            notFound();
            break;
        
        case "listemedicaments":
            afficherListeMedicaments();
            break;

        case "detailsmedicament":
            afficherDetailsMedicament();
            break;
        case "mentions":
            afficherMentions();
            break;
    }

} else {
    home();
}

?>