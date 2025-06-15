<?php

if (isset($_POST["login"]) && isset($_POST["senha"])) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if ($login == "etec" || $senha == "informática") {
        echo "Logado com sucesso!";
    } 
} else {
    echo "Acesso negado";
}
?>