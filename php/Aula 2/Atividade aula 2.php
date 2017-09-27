<?php
$exp = "2*5(5+8)*3/2(45/5)";
$contAberto = 0;
for ($i=0; $i <= 17; $i++){
    
    if ($exp[$i] == "("){
        $contAberto ++;
        
    }
    
} 
    echo   $contAberto ++;  

    // Outra forma de fazer
    echo "Contador abertos: "
    echo substr_count ($exp, '('). "<br>" . "<hr>";

    echo "Contador fechados: "
    echo substr_count ($exp, ')'). "<br>" . "<hr>";
      
    
?>