<?php

namespace PHP\iniciais\POO\Modelo\Funcionarios;

use PHP\iniciais\POO\Modelo\Funcionarios\Funcionario;
use PHP\iniciais\POO\Servico\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperarSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}
