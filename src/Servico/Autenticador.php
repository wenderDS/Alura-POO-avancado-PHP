<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogar(Autenticavel $diretor, string $senha): bool
    {
        if (!$diretor->podeAutenticar($senha)) {
            echo "Ops. Senha incorreta!";
            return false;
        }

        echo "Ok. Usuário logado no sistema!";
        return true;
    }
}