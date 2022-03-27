<?php

    require_once 'Funcoes_geral.php';

    $dep = 500;
    $array_contas = [
        '123.456.789-10' => [
            'titular' => 'Maria',
            'saldo' => 10000
        ],
        '123.456.689-11' => [
            'titular' => 'Alberto',
            'saldo' => 300
        ],
        '123.256.789-12' => [
            'titular' => 'Vinicius',
            'saldo' => 100
        ]
    ];

    foreach ($array_contas as $cpf_titular => $key) {
        echo deposito($array_contas[$cpf_titular], $dep);
    }
