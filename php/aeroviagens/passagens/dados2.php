<html>
    <head>
        <title>Erro</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    
    <body>
<?php
session_start ();

$nomeR        = $_POST["nome"];
$cpfR         = $_POST["cpf"];
$ddnR         = $_POST["ddn"];
$enderecoR    = $_POST["endereco"];
$bairroR      = $_POST["bairro"];
$cepR         = $_POST["cep"];
$telefoneR    = $_POST["telefone"];
$celularR     = $_POST["celular"];
$ufR          = $_POST["uf"];
$emailR       = $_POST["email"];

$_SESSION["nome"]      = $nomeR;
$_SESSION["cpf"]       = $cpfR;
$_SESSION["ddn"]       = $ddnR;
$_SESSION["endereco"]  = $enderecoR;
$_SESSION["bairro"]    = $bairroR;
$_SESSION["cep"]       = $cepR;
$_SESSION["telefone"]  = $telefoneR;
$_SESSION["celular"]   = $celularR;
$_SESSION["uf"]        = $ufR;
$_SESSION["email"]     = $emailR;
if($nomeR == null){
    echo "<br><br><br>
        <center><h4>
            ERRO: 01 <br>
            Por favor informar seu nome.
        </h4></center";
}
if($cpfR == null){
    echo "<br>
        <center><h4>
            ERRO: 02 <br>
            Por favor informar seu CPF.
        </h4></center";
}
if($telefoneR == null){
    echo "<br>
        <center><h4>
            ERRO: 03 <br>
            Por favor informar seu Telefone.
        </h4></center";
}
if($ufR = null){
    echo "<br>
        <center><h4>
            ERRO: 04 <br>
            Por favor informar seu Estado.
        </h4></center";
} 
if($emailR == null){
    echo "<br>
        <center><h4>
            ERRO: 01 <br>
            Por favor informar seu E-mail.
        </h4></center";

}
else{
    
header ('location: voucher.php');
    
}

?>
        <div>
            <form action="\aeroviagens\passagens\cadastro.php">
                <button type="submit" name="voltar1" class="btn btn-primary">Voltar</button>
            </form>
        </div>
   </body> 
    
</html>