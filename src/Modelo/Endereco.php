<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property string $cidade
 * @property string $bairro
 * @property string $numero
 * @property string $rua
 */
class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "{$this->numero}, {$this->rua}, {$this->bairro}, {$this->cidade}";
    }


    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function alteraCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function alteraBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    public function alteraRua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function alteraNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function __get(string $name)
    {
        $funcao = 'recupera' . ucfirst($name);
        return $this->$funcao();
    }

    public function __set(string $name, mixed $value): void
    {
        if (!isset($this->$name)) {
            echo "Essa variavel não existe!";
            return;
        }

        if (empty($value)) {
            echo "O valor da variavel não pode ser vazia!";
            return;
        }

        $funcao = 'altera' . ucfirst($name);
        $this->$funcao($value);
    }
}