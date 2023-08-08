<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Exemplo usando GET</h1>
    <hr>

    <p>Receber e processar dados via <b>GET</b>.</p>

    <?php
    extract($_GET); // resulta em $nome, $email e $mensagem
    ?>

    <h2>Dados recebidos</h2>
    <p>Nome: <?=$nome?></p>
    <p>E-mail: <?=$email?></p>
    <p>Mensagem: <?=$mensagem?></p>
</body>
</html>