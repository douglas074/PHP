<?php

namespace PHP\iniciais\POO\Servico;

use PHP\iniciais\POO\Modelo\Funcionarios\Diretor;

class Autenticador
{
    public function verificador(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAutenticar($senha)) {
            echo "Usuário logado com sucesso.";
        } else {
            echo "erro";
        }
    }
}
