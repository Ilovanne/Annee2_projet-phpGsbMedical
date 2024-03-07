<?php

require_once "models/gsbModel.php";
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
    }

} else {
    home();
}

?>