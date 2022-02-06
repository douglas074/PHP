<?php

namespace PHP\iniciais\POO\Modelo\Funcionarios;

use PHP\iniciais\POO\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function recuperarSalario(): float
    {
        return $this->salario;
    }

    public function calcularBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}
