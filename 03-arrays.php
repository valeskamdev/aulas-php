<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        .planoEstudos li:nth-child(odd) {
           color: red;
        }

        .planoEstudos li:nth-child(even) {
            color: blue;
        }
    </style>
</head>

<body>
    <h1>Trabalhando com arrays (vetores e matrizes)</h1>
    <h2>Arrays com índice numérico</h2>

    <?php
    // sintaxe com colchetes
    $bandas = ["Savatage", "Dio", "Rush"];

    // sintaxe com função array()
    $cursos = array("PHP", "Java", "C#");

    // sintaxe de atribuição de manual de índices
    $carros[0] = "GT-R";
    $carros[1] = "Supra";
    $carros[2] = "Skyline";

    //constantes de array (PHP 7+)
    define("FRUTAS", ["Banana", "Maçã", "Laranja"]);
    const ANIMAIS = ["Cachorro", "Gato", "Papagaio"];
    ?>

    <h3>Exibindo arrays</h3>
    <ol>
        <li>Banda que masi gosto: <?= $bandas[2] ?></li>
        <li>Curso básico de: <?= $cursos[0] ?></li>
        <li>Meu carro futuramente: <?= $carros[0] ?></li>
        <li>Minha fruta favorita é <?= FRUTAS[1] ?></li>
        <li>Meus animais de estimação é um <?= ANIMAIS[0] ?> e um <?= ANIMAIS[1] ?></li>
    </ol>

    <hr>

    <h2>Array associativo</h2>

    <?php
    $curso = [
        // chave associativa:
        // indentificador => valor
        "titulo" => "Gastronomia",
        "carga_horaria" => 150,
        "descricao" => "Curso de culinária básica"
    ];
    ?>

    <h3>Acessando os dados (array associativo)</h3>

    <p>Nome do curso: <?= $curso["titulo"] ?></p>
    <p>Carga horária: <?= $curso["carga_horaria"] ?> horas</p>
    <p>Descrição: <?= $curso["descricao"] ?></p>

    <hr>

    <h2>Matriz (array dentro de array)</h2>

    <?php
    $planoDeEstudos = [
        ["JS Avançado", "Node.js", "React"],
        ["PHP", "POO", "MySQL", "Python"],
        ["Teoria das cores", "Photoshop", "UX/UI"]
    ];
    ?>

    <h3>Exibindo dados da matriz</h3>

    <ul class="planoEstudos">
        <li><?= $planoDeEstudos[0][2] ?></li>
        <li><?= $planoDeEstudos[1][2] ?></li>
        <li><?= $planoDeEstudos[2][1] ?></li>
        <li><?= $planoDeEstudos[2][0] ?></li>
    </ul>

    <hr>

    <h2>Funções de análise de estruturas de dados (debug/depuração)</h2>

    <h3>print_r()</h3>
    <pre><?=print_r($bandas)?></pre>

    <h3>var_dump()</h3>
    <pre><?=var_dump($bandas)?></pre>
</body>

</html>