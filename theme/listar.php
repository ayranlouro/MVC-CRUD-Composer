<?php $v->layout("theme_all"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?= url("theme/css/bootstrap.css"); ?>">
    <style>
        #result {
            position: absolute;
            width: 100%;
            max-width: 870px;
            cursor: pointer;
            overflow-y: auto;
            max-height: 400px;
            box-sizing: border-box;
            z-index: 1001;
        }

        .link-class:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <br /><br />
    <div class="container" style="width:900px;">
        <h3 align="center">Procure pelo produto</h3><br />
        <div class="row">
            <div class="col-md-4">
                <select name="produto_lista" id="produto_lista" class="form-control">
                    <option value="">Selecione um produto</option>
                    <?php foreach ($produtos as $produto) { ?>
                        <option value="<?php echo $produto->id; ?>"> <?php echo $produto->nome_produto; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-4">
                <button type="button" name="search" id="search" class="btn btn-info">Search</button>
            </div>
        </div>
        <br />
        <div class="table-responsive" id="employee_details" style="display:none">
            <table class="table table-bordered">
                <tr>
                    <td width="10%" align="right"><b>ID do produto</b></td>
                    <td width="90%"><span id="produto_ID"></span></td>
                </tr>
                <tr>
                    <td width="10%" align="right"><b>Nome do produto</b></td>
                    <td width="90%"><span id="produto_nome"></span></td>
                </tr>
                <tr>
                    <td width="10%" align="right"><b>Descricao</b></td>
                    <td width="90%"><span id="produto_descricao"></span></td>
                </tr>

                <tr>
                    <td width="10%" align="right"><b>Valor</b></td>
                    <td width="90%"><span id="produto_valor"></span></td>
                </tr>
                <tr>
                    <td width="10%" align="right"><b>Quantidade do produto</b></td>
                    <td width="90%"><span id="produto_qtd"></span></td>
                </tr>
                <tr>
                    <td width="30%" align="right"><b>Data de cadastro</b></td>
                    <td width="90%"><span id="produto_data"></span></td>
                </tr>
            </table>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="theme/js/getDataProduct.js"></script>
</body>

</html>