<?php

require_once "Persona.php";
final class Profesor extends Persona {
    const IMPORTE_HORA_POR_DEFECTO = 16;

    private $nif;
    private array $bailes = [];
    private ?float $soldo = null;

   public function __construct(string $nome, string $apelidos, string $mobil, string $nif)
   {
        parent::__construct($nome, $apelidos, $mobil);  
        $this->nif = $nif;
   }

   public static function calcularSoldo(
    float $horas,
    float $importe_hora = self::IMPORTE_HORA_POR_DEFECTO
   ): float {
    return $horas * $importe_hora;
   }


   public function engadir(Baile $baile): bool {
        $engadido = false;
        if (!in_array($baile, $this->bailes)) {
            $this->bailes[] = $baile;
        }
   }
}

?>