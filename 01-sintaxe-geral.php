<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sintaxe Geral</title>
    <style>
        p {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .destaque {
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>

    <?php

        // geração de texto (string)
        echo "<p class='destaque'>Hello World!</p>";
        echo "<p>Hello <span class='destaque'>World!</span></p>";

        // geração de texto estruturado (com tags, atributos)
        echo "<h2>Olá Mundo!</h2>";

        // CSS inline
        echo "<h2 style='color: red;'>O Vinicius está reprovado!</h2>";
        echo "<h2 style=\"color: green;\">O Vinicius está reprovado!</h2>";
        echo '<h2 style="color: blue;">O Vinicius está reprovado!</h2>';
        
    ?>

    <script>
        let destaque = document.querySelector('p.destaque');
        console.log(destaque);
    </script>
</body>
</html>