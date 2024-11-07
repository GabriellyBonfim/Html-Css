<?php
echo '<prev>';
print_r($_POST);
echo '</pre>';


$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'agen_contato';

$link = mysqli_connect($host,$user,$pass,$bd);

$nome = $POST{'nome'};
$telefones = $POST{'telefones'};
$emails = $POST{'emails'};



mysqli_query($link, "INSERT INTO tb_contatos (NOME, TELEFONES, EMAILS) VALEUS('$nome', '$telefones', '$emails')");


?>




<!DOCTYPE html>
<html lang="PT_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contato</title>
</head>
<body>
    <h1>Agenda de Contatos</h1>
    <from method="post" action="index.php">
      <label> Nome <input type="text" name="nome" required></label>
      <label> Telefones <input type="text" name="telefone" required></label>
      <label> Emails <input type="text" name="emails" required></label>
      <button type= "submit"> Cadastrar </button>
    <from/>
    <br><hr><br>
    <table>
        <thead>
            <tr>
               <th>Id</th>
               <th>Nome</th>
               <th>Telefones</th>
               <th>Emails</th>
               <th>Adicionar</th>
            </tr>
        </thead>       
    </table>
        



</body>
</html>