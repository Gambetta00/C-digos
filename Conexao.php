<?php

$sql = "";

$resultado= $conexao -> query($sql);
$Loja = $resultado->fetch_assoc();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "TEMPORARIO";

$conexao = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $banco
);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$conexao->set_charset("utf8");


// $sql = "select * from users where nome = ?";
$stmt = $conexao->prepare($sql);

     $stmt->bind_param(
        "s",
        $nome2
    );
   $stmt->execute();
   $resultado = $stmt->get_result();


    $Loja = $resultado->fetch_assoc();

  

?>


?>