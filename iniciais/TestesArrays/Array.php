<?php

require "CalculaMedia.php";

$notas = [9, 5, 10, 2];

$calculadora = new Calculadora();

$media = $calculadora->calculaMedia($notas);

echo "Média: $media";
