<?php
class Livro {
    private $Titulo;
    private $Autor;
    private $Disponivel;
 
    public function __construct($Titulo, $Autor, $Disponivel) {  
        $this->Titulo = $Titulo;
        $this->Autor = $Autor;
        $this->Disponivel = $Disponivel;
    }
 
    public function getTitulo() {
        return $this->Titulo;
    }
 
    public function getDisponivel() {
        return $this->Disponivel;
    }
 
    public function emprestar() {
        if ($this->getDisponivel() == true) {
            $this->Disponivel = false;
        } else {
            echo "<br> O livro solicitado não está disponível no momento.";
        }
    }
 
    public function devolver() {
        $this->Disponivel = true;
        echo "<br>Obrigada. O livro foi devolvido com sucesso.";
    }
 
    public function ExibirStatus() {
        $Titular_livro = $this->getTitulo();
        if ($this->getDisponivel() == true) {
            $status_livro = "Disponível";
        } else {
            $status_livro = "Emprestado";
        }
 
        $resposta = "O livro " . $Titular_livro . " está " . $status_livro . ".";
        return $resposta;
    }
}
?>