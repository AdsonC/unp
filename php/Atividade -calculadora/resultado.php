<?php
$v1Recebido = $_GET['v1'];
$v2Recebido = $_GET['v2'];
$opr = $_GET['op'];

function calcular ($v1Recebido, $v2Recebido, $opr) {
    switch ($opr){
        case '+';
            echo "<br>" . "O resultado da soma é: " .($v1Recebido + $v2Recebido) . "<br>";
            break;
        case '-':
            echo "<br>" . "O resultado da subtração é: " . ($v1Recebido - $v2Recebido) . "<br>";
            break;
        case '*':
            echo "<br>" . "O resultado da multiplicação é: " . ($v1Recebido * $v2Recebido) . "<br>";
            break;
        case '/':
            echo "<br>" . "O resultado da divisão é: " . ($v1Recebido / $v2Recebido) . "<br>";
            break;
        case '':
            echo "<br>" . "Erro: você não inseriu a operação" . "<br> <hr>";
            break;
            
    }
    switch ($v1Recebido){
            case '';
            echo "Erro: Você não inseriu o primeiro valor" . "<br> <hr>";
            break;
    }
    switch ($v2Recebido){
            case '';
            echo "Erro: você não inseriu o segunda valor" . "<br> <hr>";
            break;
    }
}
calcular ($v1Recebido,$v2Recebido,$opr)
        
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