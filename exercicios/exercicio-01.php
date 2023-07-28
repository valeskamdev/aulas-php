<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <style>
        <?php $cor = "pink"; ?>

        body {
            background-color: <?=$cor?>;
        }

        p {
            font-family: monospace;
            font-size: 1.3rem;
        }

        .destaque {
            color: darkmagenta;
            background-color: lightsalmon;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <h1>Exercício 01</h1>

    <?php
        // definindo fuso horário Brasil
        date_default_timezone_set('America/Sao_Paulo'); 

        define("DATA", date("d/m/Y"));
        define("HORA", date("H:i"));
        const NOME_ALUNO = "Agatha Giovanna";
        $nomeCurso = "Java";
        $cargaHoraria = 1890;
        define('LIMITE_FALTAS', $cargaHoraria / 4);

    ?>

    <h2>Informações do aluno</h2>
    <p>Data: <span class="destaque"><?=DATA?></span></p>
    <p>Horário: <span class="destaque"><?=HORA?></span></p>

    <p>Nome do aluno: <span class="destaque"><?=NOME_ALUNO?></span></p>
    <p>Nome do curso:  <span class="destaque"><?=$nomeCurso?></span></p>
    <p>Carga horária:  <span class="destaque"><?=$cargaHoraria?></span></p>
    <p>Limite de faltas: <span class="destaque"><?=LIMITE_FALTAS?></span></p>
     
</body>
</html>