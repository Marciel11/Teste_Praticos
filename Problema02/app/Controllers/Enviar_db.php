<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('../Models/Conn.php');
//recebe os dados via post e insere no banco
$titulo = $_POST['titulo_livro'];
$dt_emprestimo = date('Y-m-d');
$dt_devolucao = date($_POST['dt_devolucao']);
$usuario = $_POST['tipo_usuario'];

try {
        $pdo = new PDO('mysql:host=localhost;dbname=db_biblioteca', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare('INSERT INTO tbl_emprestimo (titulo_livro, dt_emprestimo, dt_devolucao, tipo_usuario) VALUES(:titulo_livro, :dt_emprestimo, :dt_devolucao, :tipo_usuario)');
        $stmt->execute(array(

                ':titulo_livro' => $titulo,
                ':dt_emprestimo' => $dt_emprestimo,
                ':dt_devolucao' => $dt_devolucao,
                ':tipo_usuario' => $usuario

        ));
        $stmt->rowCount();
        header('Location: ../index.php?msg= Dados inserindos com sucesso!');
} catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
}
