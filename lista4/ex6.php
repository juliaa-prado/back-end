<?php

$idade= 20;
$deficiencia=false;
$gestante=false;
$menor_idade=false;

if($idade >= 60 || $deficiencia==true || $gestante==true || $menor_idade == true){
    echo "Atendimento prioritário!";

}
else {
    echo "Atendimento normal!";
}
?>