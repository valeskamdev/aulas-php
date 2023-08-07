<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    <h1>Exemplos de funções nativas</h1>
    <hr>

    <h2>Strings</h2>
    <h3>trim()</h3>

    <?php
    // função que remove espaços em branco no início e no final de uma string
    $nome = "    Vinicius me deve 80 paçocas    ";
    $nomeSemEspacos = trim($nome);

    var_dump($nome);
    var_dump($nomeSemEspacos);

    ?>

    <h3>str_replace()</h3>
    <?php
    // função que substitui uma string por outra
    $fraseFeia = "O PHP é uma linguagem ultrapassada e insegura";
    $fraseBonita = str_replace(["ultrapassada", "insegura"] , ["moderna", "segura"], $fraseFeia);

    var_dump($fraseFeia);
    var_dump($fraseBonita);

    ?>

    <h3>explode()</h3>

    <?php
    // função que transforma uma string em um array
    $linguagens = "Java, PHP, JavaScript, Python, C#";
    $arrayLinguagens = explode(", ", $linguagens);

    var_dump($linguagens);
    var_dump($arrayLinguagens);

    ?>

    <hr>

    <h2>Numéricas</h2>
    <h3>min, max, round</h3>

    <?php
    $valores = [10, 5, 50, 1000, 275];
    $valorQuebrado = 10.5;

    $menorValor = min($valores);
    $maiorValor = max($valores);
    $valorQuebradoArredondado = round($valorQuebrado);

    var_dump($valores);
    var_dump($menorValor);
    var_dump($maiorValor);

    var_dump($valorQuebrado);
    var_dump($valorQuebradoArredondado);

    ?>

    <hr>

    <h2>Arrays</h2>
    <h3>implode()</h3>

    <?php
    // função que transforma um array em uma string
    $grupos = ["Super Junior", "Blackpink", "DAY6", "EXO", "ATEEZ"];
    $gruposString = implode(" - ", $grupos);

    var_dump($grupos);
    var_dump($gruposString);
    ?>

    <h3>extract()</h3>
    <?php
    // função que transforma um array em variáveis
    $produto = [
        "nome" => "Notebook",
        "preco" => 2500,
        "quantidade" => 10
    ];

    extract($produto);

    ?>

    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Preço: <?=$preco?></li>
        <li>Quantidade: <?=$quantidade?></li>
    </ul>

    <h3>array_sum()</h3>
    <?php
    // função que soma os valores de um array
    $total = array_sum($valores);

    var_dump($valores);
    var_dump($total);

    ?>

    <h3>array_unique()</h3>
    <?php
    // função que remove valores duplicados de um array
    $produtos = ["Nootbook", "Smartphone", "Tablet", "Smartphone", "Smartwatch", "Tablet"];
    $produtosUnicos = array_unique($produtos);

    var_dump($produtos);
    var_dump($produtosUnicos);

    ?>

    <h2>Filtros</h2>
    <p>Recursos de análise e limpeza de dados aplicados através das funções <code>filter_var()</code> e <code>filter_input()</code>.</p>

    <h3>Validação</h3>

    <?php
    $email = "leska@gmail.com.br";
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
    ?>


    <h3>Sanitização</h3>

    <?php
    $ataque = "<script>document.body.innerHTML = '<h1>Ataque realizado com sucesso</h1>'</script>";

    //    echo $ataque;
    // execução sem sanitização (script é executado)

    $ataqueSanitizado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);
    echo $ataqueSanitizado;
    var_dump($ataqueSanitizado);

    ?>

    <h2>Segurança (critografia de dados)</h2>

    <?php
    // senha em texto puro (plaintext)
    $senha = "12wIP9";

    // algoritmos mais comuns de criptografia: md5, sha1, sha256 (não recomendado)
    $senhaCriptografadaMD5 = md5($senha);
    $senhaCriptografadaSHA1 = sha1($senha);
    $senhaCriptografadaSHA256 = hash("sha256", $senha);

    var_dump($senha);
    var_dump($senhaCriptografadaMD5);
    var_dump($senhaCriptografadaSHA1);
    var_dump($senhaCriptografadaSHA256);

    // algoritmo mais seguro de criptografia: password_hash (recomendado)
    $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
    var_dump($senhaSegura);

    // verificação de senha (hash)

    //    if ($senha === $senhaSegura) {  // NÃO DÁ CERTO
    //        echo "Senha correta";
    //    } else {
    //        echo "Senha incorreta";
    //    }

    if (password_verify($senha, $senhaSegura)) {
        echo "Senha correta";
    } else {
        echo "Senha incorreta";
    }
    ?>

</body>
</html>