<?php

require_once "." . DIRECTORY_SEPARATOR . "autoload.php";

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};


$cpf = new CPF(numero: '123.456.789-10');

$endereco = new Endereco(
    rua: 'Inventada',
    bairro: 'Cristo Rei',
    cidade: 'Várzea grande',
    numero: '01B'
);

$titular = new Titular(
    cpf: $cpf,
    nome: 'Jubileu',
    endereco: $endereco
);

//$conta = new Conta(titular: $titular);
$conta = new ContaPoupanca(titular: $titular);

$conta->deposita(valorADepositar: 500);
$conta->saca(valorASacar: 100);

var_dump($conta->recuperaSaldo());