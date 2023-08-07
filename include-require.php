<?php
// inclusao de recursos
require "recursos.php";
?>

<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modularização e Inclusão de Recursos</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <h1>Modularização e Inclusão de Recursos</h1>
    <hr>

    <h2><?=ESCOLA?></h2>
    <p>Estamos fazendo o curso de <?=$curso?></p>

    <ul>
       <?php foreach ($tecnologias as $tecnologia) : ?>
            <li><?=$tecnologia?></li>
       <?php endforeach; ?>
    </ul>

    <p>O aluno tem 20 anos e é <?=$verificaIdade(20)?></p>

    <hr>

    <article>
        <h2>Texto</h2>
        <?php include "texto.php"; ?>
    </article>

    <!--
     require: se o arquivo não existir, o script para de ser executado
     include: se o arquivo não existir, o script continua sendo executado
     -->
</body>
</html>