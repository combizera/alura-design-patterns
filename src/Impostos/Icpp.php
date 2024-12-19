<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Icpp extends Imposto2Aliquotas
{
    /**
     * @param Orcamento $orcamento
     * @return bool
     */
    public function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    /**
     * @param Orcamento $orcamento
     * @return float
     */
    public function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    /**
     * @param Orcamento $orcamento
     * @return float
     */
    public function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}