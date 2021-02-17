<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ordenar Sequencia Fibonacci</title>
</head>

<body>
    <form action="#" method="post">
        <input type="text" placeholder="Digite" name="numeric">
        <button type="submit" name='enviar'>Calcular</button>
        <button type="submit" name='limpar'>Limpar</button>
    </form>
    <?php

    if (!empty($_POST['limpar'])) {
        $_POST['numeric'] = "";
    }
    $numeros = $_POST['numeric'];
    $valor = (explode(",", $numeros));

    sort($valor);
    foreach ($valor as $value) {
        echo $value . ",";
    }

    ?>
</body>

</html>