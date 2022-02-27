<?php

    $nomes = "Giovanni, João, Maria, Pedro";

    $arrayNomes = explode(", ", $nomes);

foreach ($arrayNomes as $nome) {
    echo "<p>Olá $nome</p>";
}

    $nomesJuntos = implode(", ", $arrayNomes);
