<?php

 if (isset($_POST['email'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $classe = $_POST['classe'];
 }else echo "ERRO";



  $sql = "INSERT INTO usuarios (email, senha, tipo)
            VALUES (?, ?)";

            $stmt = $conexao->prepare($sql);

            $Senha_hash = password_hash(
        $senha,
        PASSWORD_DEFAULT
    );

    $stmt->bind_param(
        "ss",
        $email,
        $Senha_hash,
        $classe
    );

    $stmt->execute();

