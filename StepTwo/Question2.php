<?php
/**
 * Implementá el método unique_names.
 * Cuando se pasan dos arrays deberá devolver un array que contenga los valores de ambos arrays unificados.
 * El array no debe tener duplicados.
 * Por ejemplo, al llamar a unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']).
 * Devolvera ['Ava', 'Emma', 'Olivia','Sophia']
 */

class Problem
{
    static function unique_names(array $array1, array $array2): array
    {
        return [];
    }
}

$names = Problem::unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print // should print Ava, Emma, Olivia, Sophia
