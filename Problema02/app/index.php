  <?php
    error_reporting(0);
    require_once('./Controllers/Listar_db.php');
    $msg = $_GET['msg'];
    ?>

  <!DOCTYPE html>
  <html lang="pt-br">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="Views/template/frontend/css/style.css">
      <title>Biblioteca</title>
  </head>

  <body>
      <header>
          <ul>
              <a class="btn" href="./Views/template/frontend/form_emprestimo.php">Solicitar Emprestimo</a>
          </ul>

      </header>
      <div class="msg"><?php echo $msg; ?></div>

      <div class="color-msg">
      </div>
      <table class="table thead table-striped">
          <thead>
              <td>Livros</td>
              <td>Tipo de usuario</td>
              <td>Dias</td>
          </thead>
          <?php

            $visualizar = new Listar_db();
            $array =  $visualizar->listar();

            foreach ($array as  $value) {
            ?>
              <tr>
                  <td>
                      <?php echo $value['titulo_livro']; ?>
                  </td>
                  <td>
                      <?php echo $value['tipo_usuario']; ?>
                  </td>
                  <td>
                      <?php echo $value['dias']; ?>
                  </td>

              </tr> <?php
                }
                    ?>
      </table>
  </body>

  </html>