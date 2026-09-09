<?php

$faturas = [200, 300, 250, 500, 600, 312];
$soma = 0;

echo "Resumo das faturas: <br>";

foreach($faturas as $num){
    echo "$num <br>";
    $soma = $soma + $num;

}
echo "Seu resumo de faturas é R$: $soma";
?>
