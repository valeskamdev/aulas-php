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
    <h1>Estruturas de condicionais Versão 2</h1>
    <hr>

    <h2 class="">Simples</h2>
    <?php
    $numero = 5;
    if ($numero > 1) {
    ?>
        <p><?= $numero ?> é maior que 1</p>
    <?php
    }

    // sintaxe sem chaves
    if ($numero > 1) echo "<p>$numero é maior que 1</p>";
    ?>

    <h2>Composta</h2>
    <?php
    $produto = "Ultrabook Asus";
    $qtdEstoque = 10;
    $qtdCritica = 15;
    ?>

    <h3>$produto</h3>
    <p>Quantidade em estoque: <?= $qtdEstoque ?></p>
    <?php
    if ($qtdEstoque < $qtdCritica) {
    ?>
        <p class='comprar'>Estoque abaixo do mínimo</p>
        <?php

        // aninhada
        if ($qtdEstoque == 0) {
        ?>
            <p class='urgente'>URGENTE!!!!</p>
        <?php
        }
    } else {
        ?>
        <p class='normal'>Estoque OK</p>
    <?php
    }
    ?>

    <h2>Encadeada</h2>
    <?php

    $opcaoEscolhida = 1;

    switch ($opcaoEscolhida) {
        case 1:
    ?>
            <p>Ok, vamos fazer o lanche!</p>
        <?php
            break;
        case 2:
        ?>
            <p>Beleza, pizza no forno...</p>
        <?php
            break;
        case 3:
        ?>
            <p>Professor ficou feliz!</p>
        <?php
            break;
        default:
        ?>
            <p>Não entendi.. vou chamar a Valeska</p>
    <?php
            break;
    }
    ?>

</body>

</html>