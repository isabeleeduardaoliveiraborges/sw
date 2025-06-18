<?php
include_once "Funcionario.class.php";
 
$fulano = new Funcionario("Denner", 3000);
 
echo "<hr>";
echo $fulano->exibirInformacoes();
 
$fulano->aumentarSalario(25);
 
echo "<hr>";
echo "<strong>Após aumento de 25%:</strong><br>";
echo $fulano->exibirInformacoes();
?>