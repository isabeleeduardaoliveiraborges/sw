<?php 

include_once 'Conta.class.php';

$conta1 = new conta();

$conta1->Nome ="fulano de tal";
$conta1->Cpf ="123.456.789-00";
$conta1->Saldo=500;
 
$conta1->ConsuntarSaldo();

echo $conta1->Depositar(250);

?>