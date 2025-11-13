<?php 

 //print_r($_REQUEST); Este codigo mostra o que foi recebido do formulario

require_once __DIR__ . '/../config/config.php';

 if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['senha'] == $_POST['confirmar_senha']){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    $sql = "INSERT INTO usuarios(nome,cpf,senha) VALUES('$nome','$cpf','$senha')";
    $resultado = $conn->query($sql);

     //proximo passo: Validar se o cpf e senha ja estao cadastrados

    print_r($resultado);
 }
 else{
    echo "O methodo do form está get, ou a senha e a senha a confirmacao de senha não batem";
 }

?>
