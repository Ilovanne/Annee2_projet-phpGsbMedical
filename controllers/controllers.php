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

?>