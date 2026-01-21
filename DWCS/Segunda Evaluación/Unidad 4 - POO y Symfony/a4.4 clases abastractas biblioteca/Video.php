<?php

    require "Recurso.php";

    class Video extends Recurso {
        private float $duracion;


        public function __construct(string $titulo, $duracion_enviada)
        {
            return parent::__construct($titulo);
            $this->duracion = $duracion_enviada;
        }

        
    }
?>