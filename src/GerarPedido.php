<?php

namespace Alura\DesignPattern;

class GerarPedido implements Command
{
    public function __construct(
        private float $valorOrcamento,
        private int $itens,
        private string $nomeCliente
    ) {}

    public function execute()
    {
        $orcamento = new Orcamento();
        $orcamento->itens = $this->itens;
        $orcamento->valor = $this->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no banco de dados" . PHP_EOL;
        echo "Envia e-mail para cliente" . PHP_EOL;
    }
}