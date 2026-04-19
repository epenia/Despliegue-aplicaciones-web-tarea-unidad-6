<?php

/**
 * Sistema de gestión de tareas sencillo.
 * * @author Tu Nombre
 * @version 1.0.0
 */

/**
 * Representa una tarea en el sistema.
 */
class Tarea
{
    /** @var string Nombre de la tarea */
    private $nombre;

    /**
     * Constructor de la clase Tarea.
     * * @param string $nombre El nombre de la tarea.
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Obtiene el nombre de la tarea.
     * * @return string Nombre de la tarea.
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Simula la finalización de una tarea.
     * * @return string Mensaje de confirmación.
     */
    public function completarTarea()
    {
        return "La tarea '" . $this->nombre . "' ha sido marcada como completada.";
    }
}

// Ejemplo de uso
$miTarea = new Tarea("Aprender Git y phpDocumentor");
echo "Tarea pendiente: " . $miTarea->getNombre();
