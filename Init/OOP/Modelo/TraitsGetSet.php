<?php

namespace PHP\iniciais\POO\Modelo;

trait TraitsGetSet
{
    public function __get(string $atributo)
    {
        $aux = 'reupera' . ucfirst($atributo);
        return $this->$aux();
    }

    public function __set($nomeAtributo, $value): void
    {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($value);
    }
}
