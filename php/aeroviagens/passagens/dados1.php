<?php
session_start();

$origemR = $_POST ["origem"];
$_SESSION["origem"] =$origemR;

$destinoR = $_POST ["destino"];
$_SESSION["destino"] =$destinoR;

$idaR = $_POST ["ida"];
$_SESSION["ida"] =$idaR;

$voltaR = $_POST ["volta"];
$_SESSION["volta"] =$voltaR;


header ('location: psgs2.php')
?>


