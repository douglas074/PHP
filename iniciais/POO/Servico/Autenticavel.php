<?php

namespace PHP\iniciais\POO\Servico;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}
