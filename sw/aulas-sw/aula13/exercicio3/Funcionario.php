<?php
class Funcionario {
    private $nome;
    private $salario;
 
    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
 
    public function getNome() {
        return $this->nome;
    }
 
    public function getSalario() {
        return $this->salario;
    }
 
    public function exibirInformacoes() {
        $nome_funcionario = $this->getNome();
        $salario_funcionario = number_format($this->getSalario(), 2, ',', '.');
        return "Funcionário: $nome_funcionario <br> Salário atual: R$ $salario_funcionario";
    }
 
    public function aumentarSalario($porcentagem) {
        $aumento = $this->salario * ($porcentagem / 100);
        $this->salario += $aumento;
    }
}
?>
 