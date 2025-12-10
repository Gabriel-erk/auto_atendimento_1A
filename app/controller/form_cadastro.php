<?php 


require_once __DIR__ . '/../config/config.php';

 if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['senha'] == $_POST['confirmar_senha']){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    $sql = "INSERT INTO usuarios(nome,cpf,senha) VALUES('$nome','$cpf','$senha')";
    $result = $conn->query($sql);

    if ($result)
    {
      header("location: http://localhost/auto_atendimento_1A/home.html");
    }

 }
 else{
    echo "O methodo do form está get, ou a senha e a senha a confirmacao de senha não batem";
 }

?>
