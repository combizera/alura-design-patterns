<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Ikcv extends Imposto2Aliquotas
{
    /**
     * @param Orcamento $orcamento
     * @return bool
     */
    public function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->itens > 3;
    }

    /**
     * @param Orcamento $orcamento
     * @return float
     */
    public function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    /**
     * @param Orcamento $orcamento
     * @return float
     */
    public function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}