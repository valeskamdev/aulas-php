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
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        $interesses = filter_var_array($_POST['interesses'] ?? [], FILTER_SANITIZE_SPECIAL_CHARS);
        $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

        <h2>Dados recebidos</h2>
        <ul>
            <li>Nome: <?= $nome ?></li>
            <li>E-mail: <?= $email ?></li>
            <li>Idade: <?= $idade ?></li>
            <?php if (!empty($interesses)) { ?>
                <li>Interesses: <?= implode(", ", $interesses) ?></li>
                <li>Interesses: 
                    <ul>
                        <?php foreach ($interesses as $interesse) : ?>
                            <li><?= $interesse ?></li>
                        <?php endforeach ?>
                    </ul>
                </li>
            <?php } ?>
            <?php if (!empty($mensagem)) { ?>
                <li>Mensagem: <?= $mensagem ?></li>
            <?php } ?>
        </ul>

    <?php } ?>

</body>

</html>