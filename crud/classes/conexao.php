<?php 

class conectar{
	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $bd = "sistemaa";//nome do banco de dados que está sendo utilizado

	public function conexao(){
		//está linha faz conexão com banco de dados
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

		return $conexao;
	}
}

?>