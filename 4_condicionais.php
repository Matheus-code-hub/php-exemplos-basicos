<?php

//verificar se formulario foi enviado ($_SERVER)
//variavel nativa de PHP
if($_SERVER['REQUEST_METHOD']=='POST'){
    //Recebe a senha enviada
    $senha = $_POST['senha'];

    if($senha == '12345') {
        //redireciona para pagina de bem-vindas
        header("Location: 4b_bem_vindo.php");
        exit();
    } else{ 
        $erro = "Senha incorreta, Tente Novamente";

}}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Digite a senha</h2>
    <form action = "" method = "post">
        <label for = "">Senha: </label>
        <input type = "password" name="senha" required> <br>
        <button type = "submit">entrar</button> 
</form>   
</body>
</html>