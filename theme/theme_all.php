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
    <nav class="navbar navbar-dark bg-dark justify-content-center">
        <!-- Navbar content -->
        <?php if ($v->section("sidebar")) : endif; ?>
        <a class="navbar-brand" href="<?= url(''); ?>">Home</a>
        <a class="navbar-brand" href="<?= url("adicionar"); ?>">Adicionar</a>
        <a class="navbar-brand" href="<?= url("listar"); ?>">Listar</a>
        <a class="navbar-brand" href="<?= url("deletar"); ?>">Deletar</a>
    </nav>

    <aside>
        
    </aside>
    <main class="main_content">
        <?= $v->section("content"); ?>
    </main>

</body>

</html>