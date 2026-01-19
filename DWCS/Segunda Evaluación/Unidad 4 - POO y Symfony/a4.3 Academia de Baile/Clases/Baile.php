<?php
    class Baile {
        private string $nome;
        private string $idade_minima;

        public function __construct($nombre, $edad_minima = 8) {
            $this->nome = $nombre;
            $this->idade_minima = $edad_minima;
        }
    }
?>