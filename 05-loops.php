<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>

<body>
    <h1>Estrutura de controle de repetição</h1>

    <h2>WHILE (enquanto)</h2>
    <?php

    $i = 1;
    while ($i <= 5) {
    ?>
        <p><?= $i ?></p>
    <?php
        $i++;
    }
    ?>

    <h2>DO/WHILE (repita/ate)</h2>

    <?php

    $j = 1;
    do {
    ?>
        <div>
            <h3>Titulo <?= $j ?></h3>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    <?php
        $j++;
    } while ($j <= 10);

    ?>

    <h2>FOR (para)</h2>

    <?php

    for ($k = 1; $k <= 10; $k++) {
    ?>
        <p><code>i</code> vale: <b><?= $k ?></b></p>
    <?php
    }
    ?>

    <hr>

    <h2>Exercicio</h2>

    <?php

    $meses = [
        'Janeiro',
        'Fevereiro',
        'Março',
        'Abril',
        'Maio',
        'Junho',
        'Julho',
        'Agosto',
        'Setembro',
        'Outubro',
        'Novembro',
        'Dezembro'
    ];

    ?>

    <ol>

        <?php
        // sizeof() ou count() retorna o tamanho do array
        $quantidadeMeses = count($meses);  // melhora o desempenho do loop guardando o tamanho do array

        for ($i = 0; $i < $quantidadeMeses; $i++) {
        ?>
            <li>Mês = <?= $meses[$i] ?></li>
        <?php
        }

        ?>

    </ol>


    <hr>

    <h2>FOREACH (para cada)</h2>
    <p>Útil (e mais fácil) para lidar com <code>arrays</code>.</p>

    <ol>

        <?php

        foreach ($meses as $mes) {
        ?>
            <li>Mês = <?= $mes ?></li>
        <?php
        }

        ?>

    </ol>

    <?php
    $clubes = [
        "Corinthians" => "Timão",
        "Palmeiras" => "Porco",
        "São Paulo" => "Tricolor",
        "Santos" => "Peixe"
    ];

    foreach ($clubes as $clube => $apelido) { // $clube é a chave e $apelido é o valor
    ?>
        <p><b><?= $clube ?></b> é conhecido como <b><?= $apelido ?></b>.</p>
    <?php
    }
    ?>

    <h2>Loop com Matriz</h2>
    <?php
    $planoDeEstudos = [
        ["HTML", "CSS", "JS"],
        ["React", "React Native"]
    ];

    // usando for aninhado
    for ($i = 0; $i < count($planoDeEstudos); $i++) {
        for ($j = 0; $j < count($planoDeEstudos[$i]); $j++) {
    ?>
            <p><?= $planoDeEstudos[$i][$j] ?></p>
    <?php
        }
    }
    ?>

    <hr>
    <?php

    foreach ($planoDeEstudos as $i) {
        foreach ($i as $j) {
    ?>
            <p><i><?= $j ?></i></p>
        <?php
        }
    }

    $clientes = [
        [
            "nome" => "Chaves",
            "idade" => 8
        ],
        [
            "nome" => "Chiquinha",
            "idade" => 25
        ],
        [
            "nome" => "Kiko",
            "idade" => 10
        ]
    ];

    foreach ($clientes as $cliente) {
        ?>
        <p>O cliente <b><?= $cliente["nome"] ?></b> tem <b><?= $cliente["idade"] ?></b> anos.</p>
    <?php
    }
    ?>
</body>

</html>