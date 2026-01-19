<?php

class Persoa {
    protected string $nome;
    protected string $apelidos;
    protected int $number;
    
    public function __construct($nome, $apelidos, $number) {
        $this->nome = $nome;
        $this->apelidos = $apelidos;
        $this->number = $number;
    }

    private function NomeCompleto() {
        $full = $this->nome . " " . $this->apelidos;
        return $full;
    }
    public function verInformacion(){
        return $this->NomeCompleto() . "(" . $this->number . ")";
    }
}

?>