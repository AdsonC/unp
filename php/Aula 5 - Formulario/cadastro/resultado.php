<?php
$nome       = $_GET['nome'];
$cpf        = $_GET['cpf'];
$datanasc   = $_GET['ddn'];
$endereco   = $_GET['endereco'];
$bairro     = $_GET['bairro'];
$cep        = $_GET['cep'];
$datacad    = $_GET['ddc'];
$municipio  = $_GET['municipio'];
$telefone   = $_GET['telefone'];
$celular    = $_GET['celular'];
$uf1        = $_GET['uf1'];
$ie         = $_GET['ie'];
$uf2        = $_GET['uf2'];

echo "<br>";
echo "Nome completo: " . $nome . "<br> <hr>";
echo "CPF: " . $cpf . "<br> <hr>";
echo "Nascimento: " . $datanasc . "<br> <hr>";
echo "Endereço: " . $endereco . "<br> <hr>";
echo "Bairro: " . $bairro . "<br> <hr>";
echo "CEP: " . $cep . "<br> <hr>";
echo "Data de cadastro" . $datacad . "<br> <hr>";
echo "Municipio: " . $municipio . "<br> <hr>";
echo "Telefone: " . $telefone . "<br> <hr>";
echo "Celular: " . $celular . "<br> <hr>";
echo "UF : " . $uf1 . "<br> <hr>";
echo "Inscrição Estadual: " . $ie .  "<br> <hr>";
echo "UF: " . $uf2 . "<br> <hr>";


?>

<html>
<head>
    <body>
        <form action="index.php">
        <button type="submit">Voltar</button>
        </form>  
    </body>
</head>
</html>