<?php
// declarar variaveis de uso
$servidor = '127.0.0.1';
$banco = 'db_aula_11_10_17';
$usuario = 'adson';
$senha = '1234';

// Criar comando de conexão com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Testar conexão
if (mysqli_connect_errno($conexao)){
    echo "algo deu errado!";
}else{
    echo "Conectado com sucesso!";
}

?>