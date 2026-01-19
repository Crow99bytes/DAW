<?php
    require __DIR__.DIRECTORY_SEPARATOR."a4.3 Academia de Baile/Clases";
    class Profesor extends Persoa {
        private string $dni;
        private array $clases_impartidas = [];
        
        public function __construct($nome, $apelidos, $number, $dni) {
            parent::__construct($nome, $apelidos, $number);
            $this->dni = $dni;
        }
        
        public function calcularSoldo($s_hora = 16, $n_horas = 0):string {
            $soldo = ($n_horas * $s_hora) . "€";
            return "Sueldo: $soldo";            
        }

        public function engadirBailes($baile) {
            $tmp_array = ["Clase:" => $baile->nome, "Edad mínima" => $baile->edad_minima];
            array_push($this->clases_impartidas, $tmp_array);
        }

        public function eliminarBailes($nombre_baile_a_eliminar) {
            return "";
        }

        public function mostrarBailes($baile) {
            return "";
        }
    }
?>