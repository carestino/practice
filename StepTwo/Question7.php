<?php
/**
 * Siguiendo el principio de responsabilidad Única (SRP) que es la S del Principio SOLID
 * donde nos dice que una clase debe tener un único motivo por el cual debe ser modificada:
 * Qué cambios le harías a esta clase?
 */


class Product
{
    private $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function JsonProductFormatter()
    {
        return json_encode($this->getName());
    }
}