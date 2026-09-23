<?php 

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$servico = $_POST["servico"];



echo "<p>Nome do cliente: $nome</p>";


if ($servico == "corte") {

    echo "<p>Serviço: Corte</p>";
    echo "<p>Valor: R$ 30,00</p>";

} elseif ($servico == "barba") {

    echo "<p>Serviço: Barba</p>";
    echo "<p>Valor: R$ 20,00</p>";

} elseif ($servico == "corte_barba") {

    echo "<p>Serviço: Corte + Barba</p>";
    echo "<p>Valor: R$ 45,00</p>";

} else {

    echo "<p>Serviço não encontrado.</p>";

}

?>

