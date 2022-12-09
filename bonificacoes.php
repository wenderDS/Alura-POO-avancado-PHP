<?php

require_once "." . DIRECTORY_SEPARATOR . "autoload.php";

use Alura\Banco\Servico\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor};

$cpfFuncionario = new CPF(numero: '123.456.789-10');
$umFuncionario = new Desenvolvedor(
    nome: 'Wender Lima',
    cpf: $cpfFuncionario,
    salario: 1000.00
);

$umFuncionario->sobeDeNivel();
echo  $umFuncionario->recuperaSalario();

$cpfFuncionaria = new CPF(numero: '123.456.789-12');
$umaFuncionaria = new Gerente(
    nome: 'Janina',
    cpf: $cpfFuncionaria,
    salario: 3000.00
);

$cpfOFuncionario = new CPF(numero: '123.456.789-14');
$umOFuncionario = new Diretor(
    nome: 'Jorjão',
    cpf: $cpfOFuncionario,
    salario: 10000.00
);

$cpfFuncionarioEditor = new CPF(numero: '123.456.789-15');
$umFuncionarioEditor = new Diretor(
    nome: 'Jubileu Pena Bamba',
    cpf: $cpfFuncionarioEditor,
    salario: 2000.00
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe(funcionario: $umFuncionario);
$controlador->adicionaBonificacaoDe(funcionario: $umaFuncionaria);
$controlador->adicionaBonificacaoDe(funcionario: $umOFuncionario);
$controlador->adicionaBonificacaoDe(funcionario: $umFuncionarioEditor);


var_dump($controlador->recuperaTotal());
