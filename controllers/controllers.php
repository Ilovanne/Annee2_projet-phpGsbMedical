<?php

function home() {
    require "views/homeView.php";
}

function notFound() {
    require "views/notFoundView.php";
}

function afficherListeMedicaments(){

    $url = "http://localhost/projet-3-php/models/MedicModels.php";

    $option = array(
        "http" => array(
            "method" => "GET",
            "header" => "Content-Type: application/x-www-form-urlencoded\r\n"
        )
    );
    $contect = stream_context_create($option);
    $result = file_get_contents($url, false, $contect);

    require_once "views/listView.php";
}

?>