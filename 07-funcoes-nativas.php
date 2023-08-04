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

    <h2>Segurança</h2>

</body>
</html>