<?php
/**
 * Author: Marciel
 */
class Conn
{
	
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $dbname = "db_biblioteca";
	public $port = "3306";
	public $connect = null;

	public function conectar(){

		try {
			
			$this->connect = new PDO('mysql:host='.$this->host . ';port='. $this->port . ';dbname=' .$this->dbname, $this->user, $this->pass);
			// echo "conexao com sucesso";
			return $this->connect;
		} catch (Exception $ex) {

			echo " conexao nao! Error".$ex;
			return false;
			
		}
	}

}
