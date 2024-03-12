<?php

function getMedic()
{

    $requete = "SELECT * FROM medicaments";

    $bd ->query("SET NAMES utf8");
    $resultat = $bd -> query($requete);

    $tabMedic = array();

    while ($ligne = $resultat->fetch()) 
    {
        $tabMedic[]=$ligne;
    }

    $resultat->closeCursor();

    return $tabMedic;
}

function getMedics($codeMedic)
{

    $requete = "SELECT * FROM medicaments WHERE id = '$codeMedic'";

    $bd ->query("SET NAMES utf8");
    $resultat = $bd -> query($requete);

    $res = $resultat->fetch();
    return $res;
}

function insMedic($codeMedic, $nomM, $dateCrea, $labCrea )
{
   
    $requete = "INSERT INTO medicaments (id, nom, dateCreation, laboCreateur) VALUES ('$codeMedic', '$nomM', '$dateCrea', '$labCrea')";

    $bd->query("SET NAMES utf8");

    $bd->query($requete);
}

function updMedic($codeB, $nomB, $prenomB, $categB)
{
    $bd=connexionBd();

    $requete = "UPDATE boxeurs SET ID = '$codeB', NOM='$nomB', PRENOM='$prenomB', CATEGORIES='$categB'";

    $bd->query("SET NAMES utf8");

    $bd->query($requete);
}

function delBoxeurs($codeB)
{
    $bd=connexionBd();

    $requete = "DELETE FROM boxeurs WHERE ID='$codeB'";

    $bd->query("SET NAMES utf8");

    $bd->query($requete);
}



?>