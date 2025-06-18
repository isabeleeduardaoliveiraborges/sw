<?php
 
class Conta {
    public $Nome;
    public $Cpf;
    public $Saldo;
    public function Sacar($valor){    
    $this->Saldo= $this->Saldo - $valor;
    //$this->Saldo -= $valor;
    return $this->Saldo;
 
    }
 
 
    public function Depositar($valor){    
        $this->Saldo= $this->Saldo - $valor;
        $resultado = "Seu saldo atual é de R$" . $this->Saldo;
        return $resultado;
 
 
 
        public function Depositar($valor){  
            if($valor $this->Saldo){
                return "saldo insuficiente";
            }
           
 
            $this->Saldo= $this->Saldo - $valor;
            $resultado = "Seu saldo atual é de R$" . $this->Saldo;
            return $resultado;
   
        }
public function ConsuntarSaldo(){
    echo "Nome:".$this->Nome."<br>";
    echo "Cpf:".$this->Cpf."<br>";
    echo "Saldo:".$this->Saldo."<br>";
}
 
    }}
?>
 