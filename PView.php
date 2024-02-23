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
        .tudo {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        .sabores {
            background-color: #fff2c7;
            color: #f58b1b;
            padding: 15px;
            border: 4px solid #000000;
            margin: 0 5px 0 0; 
            text-align: left;
        }
       .info {
            display: inline-block;
            max-width: 45%;
            background-color: #fff2c7;
            color: #f58b1b;
            padding: 15px;
            border: 4px solid #000000;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>🍕Pizzaria Massa Macia🍕</h2>
    <h2>Nós temos as pizzas mais gostosas do Brasil e os melhores preços que você já viu!</h2>
    <h3>Tradicionais R$49,90</h3>

    <div class="tudo">
        <div class="sabores">
        <h3>Calabresa <h4>Molho, mussarela, calabresa, azeitona e orégano</h4></h3> 

        <h3>Quatro queijos</h3> <h4>Queijo gorgonzola, queijo parmesão, queijo mussarela, requeijão, bacon, mel</h4>

        <h3>Portuguesa</h3> <h4>Mussarela, presunto, ervilha, palmito, calabresa, cebola, ovo, bacon, tomate, azeitona, milho</h4>

        <h3>Frango com catupiry</h3> <h4>Mussarela, frango, catupiry e tomate</h4>

        <h3>Marguerita</h3> <h4>Mussarela, tomate, manjericão</h4>

        <h3>Mussarela</h3> <h4>Mussarela, óregano e azeitona</h4>

        <h3>Brigadeiro com Morango</h3> <h4>Morango, brigadeiro</h4> 
        </div>

        <div class="info">
            <form action="pizzaria_controller.php" method="post">
                <h4>Qual vai ser a pizza de hoje? 🍕</h4>
                <label for="quantidadepizza">Coloque a quantidade:</label><br>
                <input type="text" id="quantidadepizza" name="quantidadepizza"><br>

                <label for="sabor">Coloque os sabores:</label><br> 
                <input type="text" id="sabor" name="sabor"><br>

                <label for="endereco">Coloque seu endereço:</label><br> 
                <input type="text" id="endereco" name="endereco"><br>

                <input type="submit" value="Enviar">
                <p>Obrigada pela preferência :)</p>
            </form>
        </div>
    </div>

</body>
</html>