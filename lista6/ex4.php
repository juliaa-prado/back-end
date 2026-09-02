<?php

echo"MENU <br> 1-Pizza <br> 2-Hambúrguer <br> 3-Refrigerante <br> 4-Sobremesa <br> 5-Sair";

$opcao=1;



switch($opcao){
    case 1:
        echo"Qual sabor?";
        break;
    case 2:
        echo"Qual opção?";
        break;
    case 3:
        echo "Qual refrigerante?";
        break;
    case 4:
        echo "Qual sobremesa?";
        break;
    case 5:
        echo "Obrigada pela preferência!!";
        break;
    default:
        echo "Opção Inválida";
        break;
    
}
?>