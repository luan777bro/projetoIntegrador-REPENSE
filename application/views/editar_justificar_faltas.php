<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/cadastro_falta.css') ?>""">
</head>

<body>
    <form id="container" action="" method="POST">
        <h1 class="tittle">Cadastrar falta</h1>

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
                <option value="noMoney">Sem dinheiro para passagem</option>
                <option value="atrasado">Me atrasei</option>
                <option value="desanimo">Desanimado para assistir a aula</option>
                <option value="probelmasFam">Problemas familiares</option>
                <option value="outros">Outros</option>
            </select>
        </div>

        <button type="submit" class="button">Cadastrar</button>
    </form>
</body>

</html>