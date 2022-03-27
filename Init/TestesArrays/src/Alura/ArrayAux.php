<?php

namespace PHP\TestesArrays\src\Alura;

class ArrayUtils
{
    public static function remover(string $elemento, array &$array): void
    {
        $posicao = array_search($elemento, $array);

        if ($posicao) {
            unset($array[$posicao]);
            echo var_dump($array);
        } else {
            echo "Elemento não encontrado no array";
        }
    }

    public static function encontrarPessoasComSaldoMaior(int $saldo, array $array): array
    {
        $maiores = [];
        foreach ($array as $chave => $valor) {
            if ($valor > $saldo) {
                $maiores[] = $chave;
            }
        }
        return $maiores;
    }
}
