<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/justificar_cadastrar.css') ?>">
</head>

<body>
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="<?= base_url('assets/images/logo.png') ?>" alt=""></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="<?= base_url('JustificarFaltas/cadastrar') ?>">Registrar Falta</a></li>
                    <li><a href="<?= base_url('JustificarFaltas/listar') ?>">Historico Faltas</a></li>
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
        <form id="container" action="JustificarFaltas/salvar_falta" method="POST">
            <h1 class="tittle">Registrar falta</h1>

            <div>
                <label for="">Aluno:</label>
                <select name="aluno_falta">
                    <?php
                    foreach ($registros as $r) :
                    ?>
                    <option value="<?= $r->codusuario ?>"><?= $r->nome ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div>
                <label for="">Data: </label>
                <input type="date" name="date_falta">
            </div>

            <div>
                <label for="">Aula: </label>
                <input type="text" name="materia_falta" placeholder="Matemática">
            </div>

            <div>
                <label for="">Motivo: </label>
                <select name="motivo_falta">
                    <option value="semDinheiro">Sem dinheiro para passagem</option>
                    <option value="meAtrasei">Me atrasei</option>
                    <option value="desanimado">Desanimado para assistir a aula</option>
                    <option value="problemasFamiliares">Problemas familiares</option>
                    <option value="outros">Outros</option>
                </select>
            </div>

            <button type="submit" class="button">Registrar</button>
        </form>
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