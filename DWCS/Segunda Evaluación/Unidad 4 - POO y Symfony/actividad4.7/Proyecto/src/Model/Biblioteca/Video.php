<?php
namespace App\Model\Biblioteca;
   use App\Model\Infraestructura\Recurso as RecursoInfra;


class Video extends Recurso
{
    private int $duracion; // Duración en minutos
    //Recursos de infraestructura
    private array $recursos = [];

    public function __construct(
        string $titulo,
        int $duracion
    ) {
        parent::__construct($titulo);
        $this->duracion = $duracion;
        $this->log("Video creado: {$titulo}, duración {$duracion} min");
    }

   public function agregarRecurso(RecursoInfra $recurso): void
    {
        $this->recursos[] = $recurso;
        $this->log("Recurso agregado al video '{$this->titulo}': {$recurso->getDescripcion()}");
    }
// Faltan getters y setters
}
