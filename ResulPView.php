<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Massa Macia - Resultado do Pedido</title>
    <style>
        body {
            background-color: #a82c2c;
            color: #f0a23c;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Resultado do Pedido 🍕</h2>
    <h2><?php echo $resultadoPedido['mensagem']; ?></h2>
    <p><?php echo $resultadoPedido['instrucao']; ?></p>
    <h3>Seu pedido:</h3>
    <p>Quantidade de pizzas: <?php echo $resultadoPedido['quantidade']; ?></p>
    <p>Sabor da sua pizza: <?php echo $resultadoPedido['sabor']; ?></p>
    <p>Endereço de entrega: <?php echo $resultadoPedido['endereco']; ?></p>
    <h4>Valor total: R$<?php echo number_format($resultadoPedido['valorTotal'], 2, ',', '.'); ?></h4>
</body>
</html>