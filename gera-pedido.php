<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido, GerarPedido};

$valorOrcamento = $argv[1];
$itens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $itens, $nomeCliente);
$gerarPedido->execute();
