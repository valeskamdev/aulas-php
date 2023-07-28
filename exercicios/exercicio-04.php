<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop e Array</title>
    <style>
        table,
        td,
        th {
            border: 1px solid #383737;
          font-family: monospace;
        }

        table thead tr {
            background-color: #b5a0d9;
        }

        table tbody tr:nth-child(even) {
            background-color: #dad5e3;
        }

        table tbody tr:hover {
            background-color: #ccc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>Loop e Array</h1>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>

        </thead>
        <tbody>
        
        <?php
        $linguagens = [
          [
              "id" => 1,
              "linguagem" => "HTML",
              "descricao" => "Estruturação"
          ],
          [
              "id" => 2,
              "linguagem" => "CSS",
              "descricao" => "Estilos"
          ],
          [
              "id" => 3,
              "linguagem" => "JS",
              "descricao" => "Comportamentos"
          ],
          [
              "id" => 4,
              "linguagem" => "PHP",
              "descricao" => "Back-end"
          ],
          [
              "id" => 5,
              "linguagem" => "SQL",
              "descricao" => "Manipulação de dados"
          ],
          [
              "id" => 6,
              "linguagem" => "Java",
              "descricao" => "Softwares"
          ]
        ];

        $quatidadeLiguagens = count($linguagens);

        foreach ($linguagens as $linguagem) {
        ?>
            <tr>
                <td><?= $linguagem["id"] ?></td>
                <td><?= $linguagem["linguagem"] ?></td>
                <td><?= $linguagem["descricao"] ?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>

</html>