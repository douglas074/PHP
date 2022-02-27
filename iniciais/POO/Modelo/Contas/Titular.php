<?php

namespace PHP\iniciais\POO\Modelo\Contas;

use PHP\iniciais\POO\Modelo\{Pessoa, CPF, Endereco};
use PHP\iniciais\POO\Servico\Autenticavel;
use PHP\iniciais\POO\Modelo\TraitsGetSet;

class Titular extends Pessoa implements Autenticavel
{
    use TraitsGetSet;

    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
