<?php

function getActivs(){
    
    $url = "http://localhost/projet-3-php/api/activites";

    $option = array(
        "http" => array(
            "method" => "GET",
            "header" => "Content-Type: application/x-www-form-urlencoded\r\n"
        )
    );
    $context = stream_context_create($option);
    $result = file_get_contents($url, false, $context);

    return json_decode($result);
}

function getActiv($id){
    
    $url = "http://localhost/projet-3-php/api/activites?id=$id";

    $option = array(
        "http" => array(
            "method" => "GET",
            "header" => "Content-Type: application/x-www-form-urlencoded\r\n"
        )
    );
    $context = stream_context_create($option);
    $result = file_get_contents($url, false, $context);

    if(isset(json_decode($result)->message)){
        if (json_decode($result)->message == "invalid_id" || json_decode($result)->message == "not_found") {
            return null;
        }
    }

    return json_decode($result);
}

function inscrireActivite($nomU, $prenomU, $mailU, $idActivite){
        
    $url = "http://localhost/projet-3-php/api/activites";

    $data = array(
        "nom" => $nomU,
        "prenom" => $prenomU,
        "mail" => $mailU,
        "idActivite" => $idActivite
    );

    $option = array(
        "http" => array(
            "method" => "POST",
            "header" => "Content-Type: application/x-www-form-urlencoded\r\n",
            "content" => http_build_query($data)
        )
    );

    $context = stream_context_create($option);
    $result = file_get_contents($url, false, $context);

    return $result;
}


?>