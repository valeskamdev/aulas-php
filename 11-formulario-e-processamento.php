<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fromulário PHP</title>
</head>

<body>

    <h1>Formulário e processamento juntos</h1>
    <hr>

    <?php
    if (isset($_POST['enviar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
    ?>
        <h2>Dados processados:</h2>
        <p>Nome: <?= $nome ?></p>
        <p>E-mail: <?= $email ?></p>

    <?php } else { ?>

        <form action="" method="post">
            <fieldset>
                <legend>Preencha os campos abaixo</legend>

                <p>
                    <label for="nome">Nome:</label> <br>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
                </p>

                <p>
                    <label for="email">E-mail:</label><br>
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
                </p>

                <button type="submit" id="enviar" name="enviar">Enviar</button>
            </fieldset>
        </form>

    <?php } ?>
</body>

</html>