<?php

declare(strict_types=1);

use PHP\TestesArrays\src\Alura\ArrayUtils;

    require  "../Autoload.php";

    $correntistas_e_compras = [
        "Giovanni",
        "João",
        "Maria",
        "Luis",
        "Luisa",
        "12",
        "Rafael",
    ];

    ArrayUtils::remover("Giovanni", $correntistas);
