<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Exercício 06</title>
    <style>
        body {
          background-color: #cbcbcb;
          font-size: 1.2rem;
          font-family: Arial, Helvetica, sans-serif;
        }

        strong {
          text-decoration: underline;
          text-decoration-color: red;
          margin-right: 0.5rem;
        }

        form, article {
            box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
            background-color: #efefef;
        }
    </style>
</head>

<body>
    <section class="container">
        <?php
        $fabricantes = [
            1 => "Ferrari",
            2 => "Audi",
            3 => "Ford",
            4 => "Bugatti"
        ];


        if (isset($_POST['enviar'])) {
            $nome = $_POST['nome'];
            $fabricante = $fabricantes[$_POST['fabricante']];
            $preco = floatval($_POST['preco']);
            $disponibilidade = $_POST['disponibilidade'];
            $descricao = $_POST['descricao'];

            $precoFormatado = number_format($preco, 2, ",", ".");
            ?>
            <div class="w-50 d-flex align-items-center justify-content-center vh-100 w-100 card-carro">
                <article class="p-5 rounded-1">
                    <h1 class="mb-3">Informações do carro</h1>
                    <p><strong>Nome:</strong> <?= $nome ?></p>
                    <p><strong>Fabricante:</strong> <?= $fabricante ?></p>
                    <p><strong>Preço:</strong> R$<?= $precoFormatado ?></p>
                    <p><strong>Disponibilidade:</strong><?= $disponibilidade ?></p>
                    <p><strong>Descrição:</strong> <?= $descricao ?></p>
                </article>
            </div>
        <?php } else {  ?>

        <div class="d-flex align-items-center justify-content-center vh-100">
            <form action="" method="post" class="w-75 rounded-1 p-5">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do carro</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>

                <div class="mb-3">
                    <label for="fabricante" class="form-label">Fabricante</label>
                    <select class="form-select" aria-label="Default select example" id="fabricante" name="fabricante">
                        <option value="" selected disabled>Selecione uma marca</option>
                        <option value="1">Ferrari</option>
                        <option value="2">Audi</option>
                        <option value="3">Ford</option>
                        <option value="4">Bugatti</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Preço</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="preco" min="100" max="10000" step=".01">
                </div>
                <div class="mb-3">
                    <label for="sim" class="form-label">Disponibilidade: </label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="disponibilidade" id="sim" value="Sim" checked>
                        <label class="form-check-label" for="sim">
                            Sim
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="disponibilidade" id="nao" value="Não">
                        <label class="form-check-label" for="nao">
                            Não
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100" name="enviar">Enviar</button>
            </form>
        </div>
        <?php } ?>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>