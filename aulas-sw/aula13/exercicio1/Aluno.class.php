<?php
class Aluno {
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($n, $n1, $n2) {
        $this->nome = $n;
        $this->nota1 = $n1;
        $this->nota2 = $n2;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNota1() {
        return $this->nota1;
    }

    public function getNota2() {
        return $this->nota2;
    }

    public function calculaMedia() {
        $media = ($this->nota1 + $this->nota2) / 2; 
        return $media;
    }

    public function verificarSituacao() {
        $media = $this->calculaMedia();
        if ($media >= 7) {
            return "Aprovado :)";
        } else {
            return "Reprovado :(";
        }
    }
}
?>