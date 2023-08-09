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
          height: 100vh;
          width: 100%;
        }

        h1 {
          text-shadow: 1px 1px rgba(0, 0, 0, 0.56);
          font-size: 2.5rem;
          font-weight: bold;
          color: #09941a;
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
            if(empty($_POST['nome']) || empty($_POST['preco']) || empty($_POST['fabricante'])) { ?>
                <div class="d-flex align-items-center justify-content-center vh-100">
                    <div class="alert alert-warning" role="alert">
                        Precisa preencher todos os campos! <a href="javascript:history.back()">Voltar</a>
                    </div>
                </div>
            <?php } else {

            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $fabricante = filter_var($fabricantes[$_POST['fabricante']], FILTER_SANITIZE_SPECIAL_CHARS);
            $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);
            $disponibilidade = filter_input(INPUT_POST, 'disponibilidade', FILTER_SANITIZE_SPECIAL_CHARS);
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);


            ?>
            <div class="w-50 d-flex align-items-center justify-content-center flex-column vh-100 w-100">
                <h1 class="mb-4">Carro cadastrado com sucesso!  ✅</h1>
                <table class="table table-striped caption-top w-75">
                    <caption class="text-center bg-secondary text-white">Informações do carro</caption>
                    <tbody>
                    <tr>
                        <th scope="row">Nome</th>
                        <td><?= $nome ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Fabricante</th>
                        <td><?= $fabricante ?></td>
                    </tr>
                    <tr>
                        <?php if(gettype($preco) != "string") {
                        $preco = number_format($_POST['preco'], 2, ",", "."); ?>
                        <th scope="row">Preço</th>
                        <td>R$<?= $preco ?></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <th scope="row">Disponibilidade</th>
                        <td><?= $disponibilidade ?></td>
                    </tr>
                    <tr>
                        <?php if(!empty($_POST['descricao'])) { ?>
                        <th scope="row">Descrição</th>
                        <td><?= $descricao ?></td>
                        <?php } ?>
                    </tr>
                    </tbody>
                </table>

            </div>
        <?php }  }else {  ?>

        <div class="d-flex align-items-center justify-content-center vh-100">
            <form action="" method="post" class="w-75 rounded-1 p-5">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do carro</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="mb-3">
                    <label for="fabricante" class="form-label">Fabricante</label>
                    <select class="form-select" aria-label="Default select example" id="fabricante" name="fabricante">
                        <option value="" selected disabled>Selecione uma marca</option>
                        <?php foreach ($fabricantes as $key => $value) : ?>
                            <option value="<?= $key ?>"><?= $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Preço</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="preco" min="100" max="10000" step=".01" required>
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