<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <style>
        body {
            font-family: monospace;
            font-size: 1.2rem;
            background-color: #f6e0ff;
        }
        div {
            display: flex;
            justify-content: center;
        }
        section {
            box-shadow: rgba(0, 0, 0, 0.10) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
            padding: 20px 40px;
            margin: 0 20px;
            border-radius: 4px;
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #652e7d;
        }

        span {
            background-color:  #845699;
            padding: 2px 5px;
            color: #f6e0ff;

        }
    </style>
</head>
<body>


    <?php 
    const USUARIO_1 = [
        "nome" => "Evellin",
        "email" => "evellin@gmail.com",
        "senha" => "123456",
        "idade" => 26,
        "sexo" => "Feminino",
        "cidade" => "Rio Grande do Sul"
    ];

    const USUARIO_2  = [
        "nome" => "Gabriel",
        "email" => "gabriel@gmail.com",
        "senha" => "123456",
        "idade" => 20,
        "sexo" => "Masculino",
        "cidade" => "São Paulo"
    ];

    ?>

    <h1>Exercício 02</h1>

    <div>
        <section>
            <h2>Usuário 1</h2>
            <p><span>Nome:</span> <?=USUARIO_1["nome"]?> </p>
            <p><span>Email:</span> <?=USUARIO_1["email"]?> </p>
            <p><span>Idade:</span> <?=USUARIO_1["idade"]?> </p>
            <p><span>Sexo:</span> <?=USUARIO_1["sexo"]?> </p>
        </section>
        <section>
        <h2>Usuário 2</h2>
            <p><span>Nome:</span> <?=USUARIO_2["nome"]?> </p>
            <p><span>Email:</span> <?=USUARIO_2["email"]?> </p>
            <p><span>Idade:</span> <?=USUARIO_2["idade"]?> </p>
            <p><span>Sexo:</span> <?=USUARIO_2["sexo"]?> </p>
        </section>
    </div>

</body>
</html>