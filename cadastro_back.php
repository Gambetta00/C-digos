<?php

 if (isset($_POST['email'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
  
 }else echo "ERRO";



  $sql = "INSERT INTO Usuarios (Email, Senha)
            VALUES (?, ?)";

            $stmt = $conexao->prepare($sql);

            $Senha_hash = password_hash(
        $senha,
        PASSWORD_DEFAULT
    );

    $stmt->bind_param(
        "ss",
        $Email,
        $Senha_hash
    );

    $stmt->execute();

