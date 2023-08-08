<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Exemplo usando POST</h1>
    <hr>

    <p>Receber e processar dados via <b>POST</b>.</p>

    <?php
    if (empty($_POST['nome']) || empty($_POST['email'])) { ?>
        <p>Por favor, preencha todos os campos.</p>
        <p><a href='javascript:history.back()'>Voltar</a></p>
    <?php
    } else {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
    ?>

        <h2>Dados recebidos</h2>
        <p>Nome: <?= $nome ?></p>
        <p>E-mail: <?= $email ?></p>

        <?php if (!empty($mensagem)) { ?> <!-- Se a mensagem não estiver vazia, exibe -->
            <p>Mensagem: <?= $mensagem ?></p>
    <?php }
    } ?>
</body>

</html>