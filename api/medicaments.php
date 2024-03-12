<?php

include("db_connect.php");

$request_method = $_SERVER["REQUEST_METHOD"];

switch($request_method){

    case "GET":
        if(!empty($_GET["id"])){
            $id=intval($_GET["id"]);
            getMedic($id);
        }else{
            getMedics();
        }
        break;
}

function getMedics(){
    global $conn;
    
    $query = "SELECT * FROM medicaments";
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

function getMedic($id){
    global $conn;

    if (!is_numeric($id) || $id == 0) {
        http_response_code(404);
        echo json_encode(array("message" => "L'ID du médicament n'est pas valide."));
        return;
    }

    $queryMedic = "SELECT * FROM medicaments WHERE medicaments.id = :id";

    $responseMedic = array();

    $conn->query("SET NAMES 'utf8'");
    $result = $conn->prepare($queryMedic);
    
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
        $responseMedic[] = $row;
    }

    $result->closeCursor();

    $queryEffetsTherapeutiques = "SELECT liste_effets_therapeutiques.effet AS effets_therapeutiques FROM medicaments
        JOIN effet_therapeutique ON effet_therapeutique.id_medicament = medicaments.id
        JOIN liste_effets_therapeutiques ON liste_effets_therapeutiques.id = effet_therapeutique.id_effet WHERE medicaments.id = :id";

    $responseEffetsTherapeutiques = array();

    $result = $conn->prepare($queryEffetsTherapeutiques);
    
    if ($id != 0) {
        $result->bindParam(':id', $id);
    }

    $result->execute();

    while($row = $result->fetch()){
        $responseEffetsTherapeutiques[] = $row;
    }

    $result->closeCursor();

    $queryEffetsSecondaires = "SELECT liste_effets_secondaires.effet AS effets_secondaires FROM medicaments
        JOIN effet_secondaire ON effet_secondaire.id_medicament = medicaments.id
        JOIN liste_effets_secondaires ON liste_effets_secondaires.id = effet_secondaire.id_effet WHERE medicaments.id = :id";

    $responseEffetsSecondaires = array();

    $result = $conn->prepare($queryEffetsSecondaires);
    
    if ($id != 0) {
        $result->bindParam(':id', $id);
    }

    $result->execute();

    while($row = $result->fetch()){
        $responseEffetsSecondaires[] = $row;
    }

    $result->closeCursor();

    $queryReactions = "SELECT DISTINCT Medicaments.nom, reagit_avec.reaction
                       FROM Medicaments
                       JOIN reagit_avec ON ((Medicaments.id = reagit_avec.id_medicament_1 OR Medicaments.id = reagit_avec.id_medicament_2) 
                                            AND Medicaments.id != :id_medicament)
                       WHERE reagit_avec.id_medicament_1 = :id_medicament OR reagit_avec.id_medicament_2 = :id_medicament";

    $responseReactions = array();

    $resultReactions = $conn->prepare($queryReactions);
    $resultReactions->bindParam(':id_medicament', $id);
    
    if ($id != 0) {
        $resultReactions->bindParam(':id', $id);
    }

    $resultReactions->execute();

    while($row = $resultReactions->fetch()){
        $responseReactions[] = $row;
    }

    $resultReactions->closeCursor();

    header('Content-Type: application/json');

    $responseData = array(
        'medicament' => $responseMedic,
        'effets_therapeutiques' => $responseEffetsTherapeutiques,
        'effets_secondaires' => $responseEffetsSecondaires,
        'reactions' => $responseReactions
    );

    echo json_encode($responseData);
}

?>