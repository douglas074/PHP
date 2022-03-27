<?php

    namespace PHP\iniciais\POO\Modelo\Contas;

    use PHP\iniciais\POO\Modelo\Contas\Conta;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}
