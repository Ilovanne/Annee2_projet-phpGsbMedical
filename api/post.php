<?php

$url = "http://localhost/projet-3-php/api/activites?action=nouvelutilisateur";

$data = array(
    "nom" => "nom",
    "prenom" => "prenom",
    "mail" => "mail"
);

$options = array(
    "http" => array(
        "method" => "POST",
        "header" => "Content-Type: application/x-www-form-urlencoded\r\n",
        "content" => http_build_query($data)
    )
);

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

if($reuslt === FALSE) {
    /* Handle error */
}

var_dump($result);

?>