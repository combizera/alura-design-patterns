<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;
    public function __construct(?Desconto $proximoDesconto)
    {
        return $this->proximoDesconto = $proximoDesconto;
    }
    abstract public function calculaDesconto(Orcamento $orcamento): float;
}