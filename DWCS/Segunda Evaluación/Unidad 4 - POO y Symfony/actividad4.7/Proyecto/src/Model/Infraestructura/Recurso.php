<?php
    //Recurso hardware

    namespace App\Model\Infraestructura;
    class Recurso{
        private string $descripcion;

        public function __construct(string $descripcion) {
            $this->descripcion = $descripcion;
        }
    }

?>