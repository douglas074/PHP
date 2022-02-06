<?php

require_once 'Autoload.php';

use PHP\iniciais\POO\Modelo\Contas\{Titular, Conta, ContaPoupanca, ContaCorrente};
use PHP\iniciais\POO\Modelo\{Endereco, CPF};

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new ContaPoupanca($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new ContaCorrente($patricia);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new ContaPoupanca(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo 'Número de contas: ' . Conta::recuperaNumeroDeContas() . PHP_EOL;
