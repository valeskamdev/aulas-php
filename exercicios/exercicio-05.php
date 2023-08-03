<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
    <style>
        .aprovado {
            color: green;
        }

        .reprovado {
            color: red;
        }

        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 5px;
        }

        th {
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #c7c7c7;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <h1>Funções</h1>

    <?php

    $alunos = [
        [
            "nome" => "Leandro",
            "nota1" => 10,
            "nota2" => 8
        ],
        [
            "nome" => "Phelipe",
            "nota1" => 5,
            "nota2" => 6
        ],
        [
            "nome" => "Bueno",
            "nota1" => 7,
            "nota2" => 7
        ],
        [
            "nome" => "Eliel",
            "nota1" => 3,
            "nota2" => 4
        ],
        [
            "nome" => "Andre",
            "nota1" => 9,
            "nota2" => 10
        ]
    ];

    $mediaAluno = function (float $nota1, float $nota2): float {
        return ($nota1 + $nota2) / 2;
    };

    $situacaoAluno = function (float $media): string {
        if ($media >= 7) return "Aprovado";

        return "Reprovado";
    };
    ?>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Média</th>
                <th>Situação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno) : ?>
                <tr>
                    <td><?= $aluno["nome"] ?></td>
                    <td><?= $aluno["nota1"] ?></td>
                    <td><?= $aluno["nota2"] ?></td>
                  <?php $media = $mediaAluno($aluno["nota1"], $aluno["nota2"]); ?>
                    <td><?= $media ?></td>
                    <td class="<?= $situacaoAluno($media) == "Aprovado" ? "aprovado" : "reprovado" ?>"><?= $situacaoAluno($media) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</body>

</html>