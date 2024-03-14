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
    } else {
        require_once "views/detailsView.php";
    }

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

function inscriptionActivite(){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $idActivite = $_POST['idActivite'];

    $resultat = inscrireActivite($nom, $prenom, $mail, $idActivite);

    if (json_decode($resultat)->status_message === "user_successfully_inscribed"){
        header('Location: ?action=listeactivites&status=success');
    } else {
        header('Location: ?action=listeactivites&status=error');
    }
}

?>