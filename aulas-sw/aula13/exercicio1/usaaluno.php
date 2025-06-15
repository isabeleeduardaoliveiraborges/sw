<?php
include_once 'Aluno.class.php';

$fulano = new Aluno("Rafaela", 10, 8);

$media = $fulano->calculaMedia(); 

echo "Nome: " . $fulano->getNome()."<br>";
echo "Média: " . $media."<br>";
echo "Situação: " . $fulano->verificarSituacao()."<br>";
echo "<hr>"  
?>