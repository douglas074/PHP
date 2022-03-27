<?php

namespace PHP\iniciais\POO\Servico;

use PHP\iniciais\POO\Modelo\Funcionarios\Funcionario;

class ControladorBonificacao
{
    private float $totalBonificacoes;
    public function somadorBonificacao(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }
    public function recuperarTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}
