<?php 

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "hospital_autoatendimento"; 

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("conexao falhou: $conn->connect_error <br><br>");
}


?>


