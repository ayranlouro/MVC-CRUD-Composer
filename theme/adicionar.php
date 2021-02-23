<?php $v->layout("theme_all"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?= url("theme/css/bootstrap.css"); ?>">
</head>

<body>
    <form action="<?= url("adicionar"); ?>" method="POST">
        <div class="row">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-8"></label>
                <div class="col-sm-05">
                    <input type="text" class="form-control" name="nome_produto" id="inputEmail3" required placeholder="Nome do Produto">
                </div>
                <label for="inputEmail3" class="col-sm-8"></label>
                <div class="col-sm-05">
                    <input type="text" class="form-control" name="descricao" id="inputEmail3" required placeholder="Descrição">
                </div>
                <label for="inputEmail3" class="col-sm-8"></label>
                <div class="col-sm-05">
                    <input type="text" class="form-control" name="valor" id="inputEmail3" required placeholder="Adicionar Valor - ex: 10.99">
                </div>
                <label for="inputEmail3" class="col-sm-8"></label>
                <div class="col-sm-05">
                    <input type="text" class="form-control" name="qtd_produto" id="inputEmail3" required placeholder="Adicionar Quantidade - ex: 10">
                </div>
                <label for="inputEmail3" class="col-sm-8"></label>
                <div class="col-sm-05">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </div>
    </form>

    <script>
    </script>
</body>

</html>