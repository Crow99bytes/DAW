<?php 
namespace App\Service\Exportador;
use App\Model\Biblioteca\Recurso;

interface Exportador {
    public function exportar(Recurso $recurso): string;
}