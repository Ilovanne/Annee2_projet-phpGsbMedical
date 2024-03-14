<?php

function getMedics(){
    
    $url = "http://localhost/projet-3-php/api/medicaments";

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

function getMedic($id){
    
    $url = "http://localhost/projet-3-php/api/medicaments?id=$id";

    $option = array(
        "http" => array(
            "method" => "GET",
            "header" => "Content-Type: application/x-www-form-urlencoded\r\n"
        )
    );
    $context = stream_context_create($option);
    $result = file_get_contents($url, false, $context);

    if (json_decode($result)->message == "invalid_id" || json_decode($result)->message == "not_found") {
        return null;
    }

    return json_decode($result);
}


?>