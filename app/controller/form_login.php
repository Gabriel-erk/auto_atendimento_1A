<?php 

header("Content-Type: application/json");
$input = file_get_contents("php://input");
$dado_normalizado = json_decode($input,true); //ali embaixo tem o encode que vai transformar a resposta em json, aqui vou normalizar o json

require_once __DIR__ . '/../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $cpf = $dado_normalizado["cpf"] ?? '';
    $senha = $dado_normalizado['senha'] ?? '';

    $sql = "SELECT * FROM usuarios WHERE usuarios.cpf = '$cpf' AND usuarios.senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        echo json_encode(["success"=>true]);
    }
    elseif ($result->num_rows == 0){
        echo json_encode(["success"=>false]);
    }

    exit();
}


    



?>
