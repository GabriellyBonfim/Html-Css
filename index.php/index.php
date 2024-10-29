<?php
/*echo '<prev>';
print_r($_POST);
echo '</pre>';*/

//conexão com o banco
$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'ger_senhas';

$link = mysqli_connect($host,$user,$pass,$bd);

$serviço = $POST{'serviço'};
$login = $POST{'login'};
$senha = $POST{'senha'};

mysqli_query($link, "INSERT INTO tb_info (SERVICO, LOGIN, SENHA) VALEUS('$servico', '$login', '$senha')");


?>




<!DOCTYPE html>
<html lang="PT_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de senhas</title>
</head>
<body>
    <h1> Gerenciador de senhas</h1>
    <from method="post" action="index.php">
      <label> Serviço/Site <input type="text" name="servico" required></label>
      <label> Login/e-mail <input type="text" name="login" required></label>
      <label> Senha <input type="text" name="senha" required></label>
      <button type= "submit"> Cadastrar </button>
    <from/>
    <br><hr><br>
    <table>
        <thead>
            <tr>
               <th>Id</th>
               <th>Serviço/Site</th>
               <th>Login/E-mail</th>
               <th>Senha</th>
               <th>Gerenciar</th>
            </tr>
        </thead>       
    </table>
        



</body>
</html>