<?php
$usuario = $_POST['nome'];
$senha = $_POST['senha'];

if ($usuario == 'isabele' && $senha == '1234') {
    $nome = $usuario;
header("Location: privado.php?nome=" . urlencode($nome));
    exit();
} else {
header("Location: error.php");
    exit();
}
?>