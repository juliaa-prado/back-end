<?php

$musicas = ["Jardim", "Odres Novos", "Jesus meu esposo", "Romanos 12", "Nunca Igual", "Gavetas"];
echo "Suas músicas favoritas são: <br>";
foreach($musicas as $musica){
    echo "$musica <br>";
}
$qnt= count($musicas);
echo "Quantidade de músicas: " , $qnt;


