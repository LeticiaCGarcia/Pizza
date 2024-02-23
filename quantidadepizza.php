<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
 $quantidadePizza = isset($_POST["quantidadepizza"]) ? $_POST["quantidadepizza"] : "";
 $endereco = isset($_POST["endereco"]) ? $_POST["endereco"] : "";
 $sabor = isset($_POST["sabor"]) ? $_POST["sabor"] : "";

 $pizzaPreco = 49.90;
 $valorTotal = $quantidadePizza * $pizzaPreco;

 echo "<h2>Sua deliciosa pizza será preparada e logo vai para entrega!</h2>";
 echo "<p>O entregador vai receber o dinheiro e também vai levar a maquininha</p>";
 echo "<h3>Seu pedido:</h3>";
 echo "<p>Quantidade de pizzas: $quantidadePizza</p>";
 echo "<p>Sabor da sua pizza: $sabor</p>";
 echo "<p>Endereço de entrega: $endereco</p>";
 echo "<h4>Valor total: R$" . number_format($valorTotal, 2, ',', '.') . "</h4>";

} else {
 echo "Pedido não feito";
 header("Location: pizzaria.php");
 exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Massa Macia</title>
    <style>
        body {
            background-color: #a82c2c;
            color: #f0a23c;
            text-align: center;
        }
</body>
</html>
