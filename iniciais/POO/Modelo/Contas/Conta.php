<?php

namespace PHP\iniciais\POO\Modelo\Contas;

use PHP\iniciais\POO\Modelo\Contas\Titular;
use PHP\iniciais\POO\Modelo\TraitsGetSet;

abstract class Conta
{
    use TraitsGetSet;

    private $titular;
    private $saldo;
    private static $numeroDeContas;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;

        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        $valorTarifa = $valorASacar * $this->percentualTarifa();
        $valorASacar += $valorTarifa;
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
        }

        $this->saldo += $valorADepositar;
    }


    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}
