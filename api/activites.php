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
    
    case "POST":
        inscrireActivite();
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
        echo json_encode(array("message" => "404"));
        return;
    }

    while($row = $result->fetch()){
        $responseActivites[] = $row;
    }

    $result->closeCursor();
    header('Content-Type: application/json');
    echo json_encode($responseActivites);
}

function inscrireActivite(){
    global $conn;

    $nomU = $_POST["nom"];
    $prenomU = $_POST["prenom"];
    $mailU = $_POST["mail"];
    $idActivite = $_POST["idActivite"];

    $userCheckQuery = "SELECT * FROM utilisateurs WHERE email = '$mailU'";
    $userCheckResult = $conn->query($userCheckQuery);

    if ($userCheckResult->rowCount() == 0) {
        $insertUserQuery = "INSERT INTO utilisateurs (email, nom, prenom) VALUES ('$mailU', '$nomU', '$prenomU')";
        $conn->query($insertUserQuery);
    }

    $activityCheckQuery = "SELECT * FROM est_inscrit WHERE id_activite = '$idActivite' AND email = '$mailU'";
    $activityCheckResult = $conn->query($activityCheckQuery);

    if ($activityCheckResult->rowCount() > 0) {
        $response = array(
            "status" => 0,
            "status_message" => "user_already_inscribed"
        );
    } else {
        $insertActivityQuery = "INSERT INTO est_inscrit (id_activite, email) VALUES ('$idActivite', '$mailU')";
        $conn->query($insertActivityQuery);

        $response = array(
            "status" => 1,
            "status_message" => "user_successfully_inscribed"
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

?>