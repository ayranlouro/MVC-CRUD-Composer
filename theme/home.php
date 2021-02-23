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
    <div class="content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome do produto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Quantidade em estoque</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) : ?>
                    <tr>
                        <th scope="row"><?= $produto->id; ?></th>
                        <td><?= $produto->nome_produto; ?></td>
                        <td><?= $produto->descricao; ?></td>
                        <td><?= $produto->valor; ?></td>
                        <td style="text-align: center;"><?= $produto->qtd_produto; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>