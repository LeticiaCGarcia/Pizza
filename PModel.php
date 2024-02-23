<?php

class PModel {

    public function processarPedido($quantidade, $sabor, $endereco) {
        $pedido = "Pedido recebido: $quantidade pizza(s) de $sabor para entrega em $endereco";
        return $pedido;
    }







    public function processarPedidoQuantidadePizza($quantidadePizza, $sabor, $endereco) {
        $pizzaPreco = 49.90;
        $valorTotal = $quantidadePizza * $pizzaPreco;

        $resultadoPedido = [
            'mensagem' => "Sua deliciosa pizza será preparada e logo vai para entrega!",
            'instrucao' => "O entregador vai receber o dinheiro e também vai levar a maquininha",
            'quantidade' => $quantidadePizza,
            'sabor' => $sabor,
            'endereco' => $endereco,
            'valorTotal' => $valorTotal,
        ];

        return $resultadoPedido;
    }
}
?>