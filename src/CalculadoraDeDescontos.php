<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\Desconto;
use Alura\DesignPattern\Descontos\DescontoMaisde500Reais;
use Alura\DesignPattern\Descontos\DescontoMaisde5Itens;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
       $cadeiaDeDescontos = new DescontoMaisde5Itens(
           new DescontoMaisde500Reais(
               new SemDesconto()
           )
       );
       return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}