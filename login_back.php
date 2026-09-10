<?php

require_once 'conexao_msql.php';

 if (isset($_POST['email'])){
    $Lemail = $_POST['Lemail'];
    $Lsenha = $_POST['Lsenha'];
 }
  
 $sql = "select Email, Senha from Usuarios where Email = $Lemail";
 $stmt = $conexao->prepare($sql);
 $stmt->execute();
 $Loja = $stmt->get_result()->fetch_assoc();



    if( $Lemail == $Loja["Lemail"] and (password_verify($Lsenha, $Loja["Lsenha"])) ){
echo "login com Sucesso";
    }else{ echo "erro no login";}

?>