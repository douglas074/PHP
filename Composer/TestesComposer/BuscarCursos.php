<?php

require_once '../vendor/autoload.php';

use PHP\PhpModerno\TestesComposer\src\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();

$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar(
    'https://www.alura.com.br/cursos-online-programacao/php'
);

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
