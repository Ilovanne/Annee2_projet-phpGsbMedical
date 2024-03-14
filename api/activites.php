<?php

include("db_connect.php");

$request_method = $_SERVER["REQUEST_METHOD"];

switch($request_method){

    case "GET":
        if(!empty($_GET["id"])){
            $id=intval($_GET["id"]);
            getActiv($id);
        }else{
            getActivs();
        }
        break;
}

function getActivs(){
    global $conn;
    
    $query = "SELECT * FROM activites";
    $response = array();

    $conn->query("SET NAMES 'utf8'");
    $result = $conn->query($query);
    while($row = $result->fetch()){
        $response[] = $row;
    }
    $result->closeCursor();
    header('Content-Type: application/json');
    echo json_encode($response);
}

function getActiv($id){

    global $conn;

    if (!is_numeric($id) || $id == 0) {
        http_response_code(404);
        echo json_encode(array("message" => "L'ID de l'activité n'est pas valide."));
        return;
    }

    $queryActivites = "SELECT * FROM activites WHERE activites.id = :id";

    $responseActivites = array();

    $conn->query("SET NAMES 'utf8'");
    $result = $conn->prepare($queryActivites);

    if ($id != 0) {
        $result->bindParam(':id', $id);
    }

    $result->execute();

    if ($result->rowCount() == 0) {
        http_response_code(404);
        echo json_encode(array("message" => "Erreur 404"));
        return;
    }

    while($row = $result->fetch()){
        $responseActivites[] = $row;
    }

    $result->closeCursor();
    header('Content-Type: application/json');
    echo json_encode($responseActivites);
}
?>