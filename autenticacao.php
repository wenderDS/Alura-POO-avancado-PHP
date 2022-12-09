<?php

require_once "." . DIRECTORY_SEPARATOR . "autoload.php";

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Servico\Autenticador;

$auntenticador = new Autenticador();

$cpfDiretor = new CPF(numero: "123.456.789-10");
$umDiretor = new Diretor(nome: 'Jorjão', salario: 10000, cpf: $cpfDiretor);

$auntenticador->tentaLogar(diretor: $umDiretor, senha: "1234");