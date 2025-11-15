<?php 

$servername = "localhost";
$username = "root";
$password = "";       //PUXAR COM O .ENV
$dbname = "hospital"; // ou coloca aqui o nome do banco que voce criar no workbanch

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("conexao falhou: $conn->connect_error <br><br>");
}


?>

