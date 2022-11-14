<?php
$Nome = $_GET["nome"];
$DataNascimento = $_GET["datanasc"];
$Endereco = $_GET["endereco"];
$Estado = $_GET["estado"];
$Cep = $_GET["cep"];
$Telefone = $_GET["telefone"];
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table{
        border-collapse: collapse;
    }
    th,
    td {
        border: 1px solid black;
        
    }
    
</style>
<body>
    <h1> Cadastrado com Sucesso!</h1>
    <table>
    <tr>
        <th>Nome</th>
        <th>Data Nascimento</th>
        <th>Endereço</th>
        <th>Estado</th>
        <th>CEP</th>
        <th>Telefone</th>
    </tr>
    <tr>
        <td><?php echo $Nome ?></td>
        <td><?php echo $DataNascimento ?></td>
        <td><?php echo $Endereco ?></td>
        <td><?php echo $Estado ?></td>
        <td><?php echo $Cep ?></td>
        <td><?php echo $Telefone ?></td>
    </tr>
    
    </table> 
</body>
</html>