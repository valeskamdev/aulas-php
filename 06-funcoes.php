<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>

<body>
    <h1>Criando e usando funções</h1>

    <h2>Funções como procedimento ou sub-rotina</h2>


    <?php
    function dadosAutor(): void
    {
        echo "<div>";
        echo "<p>Nome: <strong>Lucas</strong></p>";
        echo "<p><a href='mailto:teste@gmail.com'>teste@gmail.com</a></p>";
        echo "</div>";
    }
    ?>

    <section>
        <h3>Chamada da sub-rotina/procedimento</h3>
        <?= dadosAutor() ?>

        <article>
            <h4>Outra chamada</h4>
            <?= dadosAutor() ?>
        </article>
    </section>

    <h2>Função com retorno de dados</h2>

    <?php
    function dadosCurso(): string
    {
        return "Técnico em Informática para Internet";
    }
    ?>

    <p>Estamos no curso de <?= dadosCurso() ?></p>
    <p><?= dadosCurso() ?> é ministrado no Senac Penha</p>

    <h2>Função com parâmetros</h2>

    <?php
    function soma($valor1, $valor2, $valor3): float
    {
        return $valor1 + $valor2 + $valor3;
    }
    ?>

    <!-- Chamando e exibindo diretamente o retorno -->
    <p>Resultado 1: <?= soma(10, 20, 5) ?></p>
    <p>Resultado 2: <?= soma(23, 84, 1000.75) ?></p>

    <?php
    // Chamando e guardando o retorno
    $resultado3 = soma(500, 480, 700);
    ?>


    <p>Resultado 3: <?= $resultado3 ?></p>
    <?php if ($resultado3 > 100) { ?>
        <p>Vinicios foi demitido!</p>
    <?php } ?>


    <!-- Usando função como parte  -->
    <?php
    if (soma(2, 3, 10) >= 10) { ?>
        <p>Kaue foi demitido!</p>
    <?php } ?>


    <h2>Função com parâmetros opcionais</h2>

    <?php
    function saudacao($mensagem, $pessoa = ""): string
    {
        return "Olá, $mensagem $pessoa!";
    }
    ?>

    <p><?= saudacao("bom dia", "Melissa") ?></p>
    <p><?= saudacao("boa noite", "Tanaka") ?></p>
    <p><?= saudacao("boa tarde") ?></p>

    <h2>Indução de tipos de dados</h2>

    <?php
    /* tipos de dados mais comuns
    - string -> texto
    - int -> números inteiros
    - float -> casas decimais
    - array -> vetor 
     */

    /* isso auxiliará na entrada/saída correta dos dados manipulados pela função
     além de auxiliar na documentação do código */

    function verificaNegativo(int $valor): string
    {
        if ($valor < 0) {
            return "negativo";
        } else {
            return "positivo";
        }
    }
    ?>

    <p>O número 10 é <?= verificaNegativo(10) ?></p>
    <p>O número -10 é <?= verificaNegativo(-10) ?></p>
    <p>O número 0 é <?= verificaNegativo("texto") ?></p>

</body>

</html>