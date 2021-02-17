<?php
require_once('../../../Models/Conn.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../frontend/css/style.css">
    <script src="./validar_data.js"></script>
    <title>Emprestimo</title>

</head>

<body>
    <header>
        <ul>
            <a class="btn" href="../../../index.php">Voltar</a>
        </ul>
        <div class="title">Solicitção de emprestimos de livros</div>

        <div class="container2">

            <form name="formulario" method="POST" action="../../../Controllers/Enviar_db.php">
                <div class="form-group col-md-10"><br>
                    <input class="input" type="text" required name="titulo_livro" placeholder="Titulo do livro">
                </div>
                <div class="form-group col-md-10">
                    <label>Selecione Usuario</label><br>
                    <select id="acao" id="acao" onChange="valida_prazo()" name="tipo_usuario" required class="form-control input">
                        <option> </option>
                        <option>Aluno</option>
                        <option>Professor</option>
                    </select>
                </div>
                <label>Data Devolucão</label>
                <div class="form-group col-md-10">
                    <input class="input" id="dt_devolucao" type="date" name="dt_devolucao">
                </div>
                <input class="btn_03" type="submit" name="enviar" value="Emprestimo">
            </form>

        </div>
</body>

</html>