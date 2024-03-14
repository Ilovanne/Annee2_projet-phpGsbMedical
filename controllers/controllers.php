<?php

function home() {
    require "views/homeView.php";
}

function notFound() {
    require "views/notFoundView.php";
}

function afficherListeMedicaments(){

    $medicaments = getMedics();

    require_once "views/listMedicView.php";
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

function afficherListeActivites(){

    $activites = getActivs();

    require_once "views/listActivView.php";
}

function afficherInscription(){
    require_once "views/inscriptionView.php";
}

function afficherMentions(){
    require_once "views/mentionView.php";
}

?>