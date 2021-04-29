<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/listar_usuario.css') ?>">
</head>

<body>
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="<?= base_url('assets/images/logo.png') ?>" alt=""></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="<?= base_url('justificarfaltas/cadastrar') ?>">Registrar Falta</a></li>
                    <li><a href="<?= base_url('justificarfaltas/listar') ?>">Historico Faltas</a></li>
                    <li><a href="#">Solicitar Apoio</a></li>
                    <li><a href="<?= base_url('usuario/logout') ?>">Sair</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
        <table>
            <tr>
                <th>#</th>
                <th>Matricula</th>
                <th>Nome completo</th>
            </tr>
            <?php
            foreach ($registros as $r) :
            ?>
            <tr>
                <td><?= $r->codusuario ?></td>
                <td><?= $r->matricula ?></td>
                <td><?= $r->nome ?></td>
                <td> <a href="<?= base_url('/usuario/editar/' . $r->codusuario); ?>">editar</a> </td>
                <td><?= anchor("usuario/apagar/$r->codusuario", 'Apagar') ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('.nav').addClass('affix');
            console.log("OK");
        } else {
            $('.nav').removeClass('affix');
        }
    });
    </script>
</body>

</html>