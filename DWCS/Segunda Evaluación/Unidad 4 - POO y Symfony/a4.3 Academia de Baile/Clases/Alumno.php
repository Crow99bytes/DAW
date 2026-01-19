<?php
    require __DIR__.DIRECTORY_SEPARATOR."a4.3 Academia de Baile/Clases";
    class Alumno extends Persoa {

        // Propiedades:
        private int $numClases;
        
        public function __construct($nome, $apelidos, $number) {
            parent::__construct($nome, $apelidos, $number);
        }

        public function setNumClases($num_clases) : void {
            $this->numClases = $num_clases;      
        }

        public function aPagar() :string {

            if ($this->numClases >= 3){
                $esto = "40€";
                $banderilla = true;
            } 
            elseif ($this->numClases === 2){
                $esto = "40€";
                $banderilla = true;
            }
            elseif ($this->numClases === 1){
                $esto = "40€";
                $banderilla = true;
            }


            if ($banderilla) {
                return "Ten que pagar $esto.";
            }
            else {
                return "Debe indicar previamente o número de clases";
            }

            
        }
        
    }
?>