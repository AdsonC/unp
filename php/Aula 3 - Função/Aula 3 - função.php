<?php
// Time zone do Brasil e comandos para data
date_default_timezone_set('America/Fortaleza');
echo date ('d/m/y H:i:s'). "<br>";
echo date ('h:i:s');

//Quebrar linha e divisor

echo "<br> <hr>";


//Criando funções dentro do PHP

function somar ($v1,$v2) {
    echo "O resultado da soma é: " . ($v1 + $v2) . "<br> <hr>";    
}

somar (10,5);
    
    
// utilizando switch pra criar uma calculadora basica
echo "utilizando switch pra criar uma calculadora basica" ."<br> <br> <br>";

function calcular ($v1, $v2, $op){
    
    switch ($op){
        case '+';
            echo "O resultado da soma é: " .($v1 + $v2) . "<br> <hr>";
            break;
        case '-':
            echo "O resultado da subtração é: " . ($v1 - $v2) . "<br> <hr>";
            break;
        case '*':
            echo "O resultado da multiplicação é: " . ($v1 * $v2) . "<br> <hr>";
            break;
        case '/':
            echo "O resultado da divisão é: " . ($v1 / $v2) . "<br> <hr>";
            break;
    }
    
}

calcular (5,2,'+');
calcular (5,2,'-');
calcular (5,2,'*');
calcular (5,2,'+/');




?>

