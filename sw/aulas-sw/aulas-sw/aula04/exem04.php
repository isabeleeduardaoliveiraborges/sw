<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Dados Recebidos";
    echo "<br>";
    echo "Nome: " . $_POST["nome"];
     echo "<br>";
    echo "E-mail: " . $_POST["email"];
     echo "<br>";
    echo "Data de Nascimento: " . $_POST["data_nascimento"];
     echo "<br>";
    echo "Bandeira do Cartão: " . $_POST["bandeira"];
} else {
    echo "Acesso inválido.";
}