<?php

require_once "." . DIRECTORY_SEPARATOR . "autoload.php";

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco(
    cidade: "Brocolis",
    bairro: "Shumatsu",
    numero: "71B",
    rua: "Cacilds"
);

$outroEndereco = new Endereco(
    cidade: "Paranaue",
    bairro: "Arrombador",
    numero: "01A",
    rua: "Japinha"
);

$umEndereco->rua = 'Jabuticaba';

echo $umEndereco . PHP_EOL;
//echo $outroEndereco . PHP_EOL;

//echo $outroEndereco->rua;