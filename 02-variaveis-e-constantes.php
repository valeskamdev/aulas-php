<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Manipulação dados na memória</h1>
    <hr>

    <?php

    // variáveis
    $curso = "Téc. em Informática para Internet"; // string
    $ano = 2023; // integer
    $preco = 2500.25;  // float

    echo "<h2>Saída de dados usando echo na sintaxe COMPLETA</h2>";

    echo $curso;
    echo "<p>$curso</p>"; // interpolação 
    echo '<p>$curso</p>'; // vira string (errado)
    echo "<p>" . $curso . "</p>"; // concatenação

    echo "<p>Ano letivo: $ano</p>";
    echo "<p><b>Preço</b>: $preco</p>";
    
    ?>

    <h2>Saída de dados usando sintaxe simplificada</h2>
    <p><?php echo $curso ?></p>
    <p><?=$curso?></p>

    <p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?></p>

    <?php
        // constantes

        // 1° forma: usando a função define()
        define("MEU_NOME",  "Valeska Marques");

        // 2° forma: usando a palavra reservada const
        const UNIDADE = "Penha";

        // saída de dados constantes
        echo MEU_NOME;
        echo "<p><b>" . MEU_NOME . "</b></p>";
    
    ?>

    <!-- Saída simplificada -->
    <p><b><?= MEU_NOME?></b> e estou no Senac <?=UNIDADE?> </p>
    
</body>
</html>