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

    $httpStatus = $http_response_header[0];
    $statusCode = explode(' ', $httpStatus)[1];

    if ($statusCode == "404") {
        return null;
    }

    return json_decode($result);
}


?>