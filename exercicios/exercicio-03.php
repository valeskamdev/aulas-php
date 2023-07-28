<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        p:last-child {
            background-color: green;
            color: #fff;
        }

        @keyframes pisca-pisca {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        span {
            animation: pisca-pisca alternate .8s infinite;
        }
    </style>
</head>

<body>
    <h1>Condicionais</h1>
    <?php
    $salario = 14580;

    if ($salario < 1500) {
        $salarioComAumento = $salario * 1.15;
    } elseif ($salario <= 3000) {
        $salarioComAumento = $salario * 1.10;
    } else {
        $salarioComAumento = $salario * 1.05;
    }

    $salarioFormatadoComAumento = number_format($salarioComAumento, 2, ',', '.');
    $salarioFormatadoSemAumento = number_format($salario, 2, ',', '.');
    ?>

    <p>Sálario sem aumento: R$ <?= $salarioFormatadoSemAumento ?> 🙂</p>
    <p>Sálario com aumento: <span>R$ <?= $salarioFormatadoComAumento ?></span> 😎🤩</p>
</body>

</html>