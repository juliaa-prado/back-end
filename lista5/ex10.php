<?php

$altura=1.60;
$peso=110;
$imc=$peso/($altura*$altura);

echo "Seu IMC e ", $imc;
echo "<br>";

if($imc>=19 && $imc<=24 ){
    echo"Você está no peso ideal!";
}
else if($imc>=25 && $imc<=29 ){
    echo"Você está sobrepeso!";
}
else if($imc>=30 && $imc<=34 ){
    echo"Você está com obesidade grau 1!";
}
else if($imc>=35 && $imc<=39){
    echo"Você está com obesidade grau 2!";
}
else if($imc>=40 ){
    echo"Você está com obesidade grau 3!";
}
?>

