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


    <h2>Numéricas</h2>

    <h2>Arrays</h2>

    <h2>Filtros</h2>

    <h2>Segurança</h2>

</body>
</html>