<?PHP
require_once('./Models/Conn.php');

class Listar_db
{
    public $connect;
    //metodo listar dados do banco
    public  function listar()
    {
        $conn = new Conn();
        $this->connect = $conn->conectar();
        $query_user = "SELECT titulo_livro, tipo_usuario,
 CAST(SEC_TO_TIME(TIMESTAMPDIFF(SECOND,  dt_emprestimo,  dt_devolucao)) / time('24:00:00')  AS UNSIGNED INTEGER) AS dias
 FROM db_biblioteca.tbl_emprestimo";

        $result_user = $this->connect->prepare($query_user);
        $result_user->execute();
        return $result_user->fetchAll();
    }
}
