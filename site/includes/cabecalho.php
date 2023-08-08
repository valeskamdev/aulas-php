<?php
$arquivo = basename($_SERVER['PHP_SELF']);

$titulo = match ($arquivo) {
    'index.php' => 'Home',
    'cursos.php' => 'Cursos',
    'duvidas.php' => 'Dúvidas',
    'contato.php' => 'Contato',
    default => 'Site PHP'
};
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Site PHP</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cursos.php">Cursos</a></li>
                <li><a href="duvidas.php">Dúvidas</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>