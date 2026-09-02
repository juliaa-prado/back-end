<?php
function verificaridade($idade){
    if($idade < 16){
        return "Não pode votar";
    }elseif($idade < 18){
        return "Voto opcional";
    }else{
        return "Voto obrigatório";
    }
}
echo verificaridade(17);