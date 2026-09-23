<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == "juliaprado@gmail.com"
    && $senha == "juju679"){
        echo "Login bem sucedido!!!!";
    }
else{
    echo "Login ou senha Inválido";
}