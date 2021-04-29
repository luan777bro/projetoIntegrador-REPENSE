<!DOCTYPE html>
<html lang="en">

<head>
    <title>REPENSE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/icons/favicon.ico'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animate/animate.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/select2/select2.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css'); ?>">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url('assets/images/img-01.png'); ?>" alt="IMG">
                </div>


                <?= form_open('/usuario/autenticar', array('class' => 'login100-form validate-form')) ?>
                <span class="login100-form-title">
                    Login
                </span>

                <div class="wrap-input100" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Matrícula">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    </span>
                </div>

                <div class="wrap-input100" data-validate="Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Senha">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        ENTRAR
                    </button>
                </div>
                <?= form_open(); ?>


                <div class="text-center p-t-12">
                    <span class="txt1">
                        Não tem uma conta?
                    </span>
                    <a class="txt2" href="<?= base_url('usuario/cadastrar'); ?>">
                        Cadastre-se
                    </a>
                </div>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="<?= base_url('assets/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/vendor/bootstrap/js/popper.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/vendor/select2/select2.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/vendor/tilt/tilt.jquery.min.js'); ?>"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('assets/js/main.js'); ?>"></script>

</body>

</html>