<?php

namespace PHP\iniciais\POO\Modelo\Funcionarios;

use PHP\iniciais\POO\Servico\Autenticavel;
use PHP\iniciais\POO\Modelo\Funcionarios\funcionario;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperarSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}
