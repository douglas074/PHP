<?php

require_once "./Autoload.php";

use PHP\TestesArrays\src\Alura\ArrayUtils;

    $correntistas = [
        'Giovanni',
        'João',
        'Maria',
        'Luis',
        'Luisa',
        'Rafael',
    ];

    $saldos = [
        2500,
        3000,
        4400,
        1000,
        8700,
        9000,
    ];

    $relacionados = array_combine($correntistas, $saldos);

    $pessoas = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $correntistasContas);
