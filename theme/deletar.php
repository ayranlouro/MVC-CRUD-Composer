<?php $v->layout("theme_all"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?= url("theme/css/bootstrap.css"); ?>">

</head>

<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th style="text-align: center;" scope="col">Nome do produto</th>
                <th style="text-align: center;" scope="col">Descrição</th>
                <th style="text-align: center;" scope="col">Valor</th>
                <th style="text-align: center;" scope="col">Quantidade em estoque</th>
                <th style="text-align: center;" scope="col">Quantidade para retirar</th>
                <th style="text-align: center;" scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <form action="<?php url('deletarPost'); ?>" method="post">
                <?php foreach ($produtos as $produto) : ?>
                    <tr>
                        <th scope="row"><?= $produto->id; ?></th>
                        <td><?= $produto->nome_produto; ?></td>
                        <td><?= $produto->descricao; ?></td>
                        <td><?= $produto->valor; ?></td>
                        <td style="text-align: center;"><?= $produto->qtd_produto; ?></td>
                        <td><input type="text" name="quantidade" id="quantidade" class="form-control"></td>
                        <td><button class="btn btn-danger btn-xs" value="<?php echo $produto->id; ?>" name="botao1" id="botao1" data-toggle="modal" data-target="#exampleModal">Retirar</button></td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
        </form>
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Digite a quantidade de produtos para retirada!</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Quantidade</label>
                            <input type="text" name="quantidade" id="quantidade" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" name="botao2" id="botao2" class="btn btn-primary">Retirar</button>
                    </div>
                </div>
            </div>
        </div>
        </form> -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="theme/js/getProduct.js"></script>
</body>

</html>