<?php

function sacar(array $array, float $valor): string
{
    if ($valor > 0) {
        $array['saldo'] += $valor;
        return "Saldo atual de {$array['titular']} é  {$array['saldo']} <br>";
    } else {
        return "Depósito não pode ser igual a zero. <br>";
    }
}

function deposito(array $array, float $valor): string
{
    if ($valor > 0) {
        $array['saldo'] += $valor;
        return "Saldo atual de {$array['titular']} é  {$array['saldo']} <br>";
    } else {
        return "Depósito não pode ser igual a zero. <br>";
    }
}
