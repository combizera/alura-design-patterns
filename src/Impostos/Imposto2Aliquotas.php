<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class Imposto2Aliquotas implements Imposto
{
    abstract protected function deveAplicarTaxaMaxima(): bool;
    abstract protected function calculaTaxaMaxima(): float;
    abstract protected function calculaTaxaMinima(): float;


    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($this->deveAplicarTaxaMaxima($orcamento)) {
            return $this->calculaTaxaMaxima($orcamento);
        }

        return $this->calculaTaxaMinima($orcamento);
    }
}