<?php

function home() {
    require "views/homeView.php";
}

function notFound() {
    require "views/notFoundView.php";
}

function afficherListeMedicaments(){

    $medicaments = getMedics();

    require_once "views/listView.php";
}

function afficherDetailsMedicament(){

    $id = $_GET["id"];

    $medicament = getMedic($id);

    if($medicament == null) {
        notFound();
        exit();
    }

    require_once "views/detailsView.php";
}

?>