<?php

function getMedics(){
    
    $url = "http://localhost/projet-3-php/api/medicaments";

    $option = array(
        "http" => array(
            "method" => "GET",
            "header" => "Content-Type: application/x-www-form-urlencoded\r\n"
        )
    );
    $contect = stream_context_create($option);
    $result = file_get_contents($url, false, $contect);

    return json_decode($result);
}

?>