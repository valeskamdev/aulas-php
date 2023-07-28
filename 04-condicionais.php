<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>

    <style>
        .normal {
            color: #2eb03f;
        }

        .comprar {
            color: #f00;
        }

        .urgente {
            color: #f00;
            font-weight: bold;
            background-color: #ffe957;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <h1>Estruturas de condicionais</h1>
    <hr>

    <h2 class="">Simples</h2>
    <?php
    $numero = 5;
    if ($numero > 1) {
        echo "<p>$numero é maior que 1</p>";
    }

    // sintaxe sem chaves
    if ($numero > 1) echo "<p>$numero é maior que 1<    /p>";
    ?>

    <h2>Composta</h2>
    <?php
    $produto = "Ultrabook Asus";
    $qtdEstoque = 10;
    $qtdCritica = 15;

    echo "<h3>$produto</h3>";
    echo "<p>Quantidade em estoque: $qtdEstoque</p>";
    if ($qtdEstoque < $qtdCritica) {
        echo "<p class='comprar'>Estoque abaixo do mínimo</p>";

        // aninhada
        if ($qtdEstoque == 0) {
            echo "<p class='urgente'>URGENTE!!!!</p>";
        }
    } else {
        echo "<p class='normal'>Estoque OK</p>";
    }
    ?>

    <h2>Encadeada</h2>
    <?php

    /* opcoes para o exemplo:
     1 -> Lanche
     2 -> Pizza
     3 -> Paçoca
     qualquer outra coisa -> Opção inválida */

    $opcaoEscolhida = 1;

    if ($opcaoEscolhida == 1) {
        echo "<p>Ok, vamos fazer o lanche!</p>";
    } else if ($opcaoEscolhida == 2) {
        echo "<p>Beleza, pizza no forno...</p>";
    } else if ($opcaoEscolhida == 3) {
        echo "<p>Professor ficou feliz!</p>";
    } else {
        echo "<p>Não entendi.. vou chamar a Valeska</p>";
    }
    ?>

    
</body>

</html>