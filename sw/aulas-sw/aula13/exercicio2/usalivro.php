<?php
    include_once 'Livro.class.php';
 
    $livro = new livro('Diva', 'José de Alencar', true);
 
    //echo "</pre>"; //ajusta para visualização de copdigo
    //print_r($livro);
    //echo"</pre>"
    echo "status do livro:";
    echo $livro->ExibirStatus();
    echo "<hr>";
 
    echo "foi feito um emprestimo";
    $livro->Emprestar();
    echo "<hr>";
 
    echo "status do livro";
    echo $livro->ExibirStatus();
    echo "<hr>";
 
    echo "foi feito um emprestimo";
    $livro->Emprestar();
    echo "<hr>";
 
    echo "Efetuando a devolução";
    $livro->devolver();
    echo "<hr>";
 
    echo "status do livro";
    $livro->ExibirStatus();
    echo "<hr>";
 
?>