<?php

    require "conexao.php";

    if($_GET && $_GET['acao']="atualizar"){
        $id = $_GET['id'];
        $resultado = mysqli_query($link,'SELECT * FROM tb_info WHERE ID ='.$id);
        while($dados = mysqli_fetch_assoc($resultado)){
            $id = $dados['id'];
            $servico = $dados['servico'];
            $login = $dados['login'];
            $senha = $dados['senha'];
        }
    }
    if($_POST){
    
        $id = $_POST['id'];
        $servico = $_POST['servico'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];


        mysqli_query($link,"UPDATE tb_info SET SERVICO = '$servico', LOGIN = '$login', SENHA = '$senha' WHERE ID =".$id);
        header('location: index.php');
    }


?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de senhas </title>
</head>
<body>
    <h1>Atualização</h1>
    <br><hr><br>
    <form method="post">
        <label> id <inout type="text" name="id" value="<?php echo $id; ?>" required></label>
        <label>Serviço/Site <inout type="text" name="servico" value="<?php echo $servico; ?>" required></label>
        <label>Login/E-mail <inout type="text" name="login" value="<?php echo $login; ?>" required></label>
        <label> senha <inout type="text" name="senha" value="<?php echo $senha; ?>" required></label>
        <button type="submit"> Atualizar </button>
    </from>    
    <br><hr><br>
</body>
</html>