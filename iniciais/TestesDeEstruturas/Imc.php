<?php

$alt = 1.80;
$peso = 80;

$res = $peso / ($alt ** 2);

if ($res < 16.4) {
    echo "Seu IMC é $res, considerado magro para a OMS";
} elseif ($res > 17.3 and $res <  25.5) {
    echo "Seu IMC é $res, considerado normal para a OMS";
} elseif ($res > 25.5 and $res <  29.7) {
    echo "Seu IMC é $res, considerado sobrepeso para a OMS";
} elseif ($res > 29.7) {
    echo "Seu IMC é $res, considerado obeso para a OMS";
}
