<?php

namespace PHP\PhpModerno\TestesComposer\src;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private $httpClient;
    private $crawler;

    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar(string $url): array
    {
        $retorno = $this->httpClient->request('GET', $url);

        $html = $retorno->getBody();
        $this->crawler->addHtmlContent($html);

        $elementosCurso = $this->crawler->filter('span.card-curso__nome');

        foreach ($elementosCurso as $elementos) {
            $cursos[] = $elementos->textContent;
        }

        return $cursos;
    }
}
