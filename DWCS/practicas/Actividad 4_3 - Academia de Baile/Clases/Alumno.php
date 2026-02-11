<?php
    require_once("Persona.php");
    
    final class Alumno extends Persona {
        const CUOTA_UNA_CLASE = 20;
        const CUOTA_DOS_CLASES = 32;
        const CUOTA_TRES_O_MAS_CLASES = 40;

        private int $numClases = 0;

        public function __construct(string $nome, string $apelidos, string $mobil, $numClases = 0)
        {
            parent::__construct($nome, $apelidos, $mobil);
            $this->numClases = $numClases;
        }


        /**
         * Set the value of numClases
         *
         * @param int $numClases
         *
         * @return self
         */
        public function setNumClases(int $numClases): self
        {
                $this->numClases = $numClases;

                return $this;
        }

        public function aPagar(): string {
            $importe = 0;

            if ($this->numClases > 0) {
                switch ($this->numClases) {
                    case 1:
                        $importe = self::CUOTA_UNA_CLASE;
                        break;
                    case 2:
                        $importe = self::CUOTA_DOS_CLASES;
                        break;
                    case 3:
                        $importe = self::CUOTA_TRES_O_MAS_CLASES;
                        break;
                }
            }

            return $importe;
        }
    }
?>