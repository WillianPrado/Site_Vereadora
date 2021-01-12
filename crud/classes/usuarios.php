<?php
      
class usuarios{
	public function registroUsuario($dados){
		$c = new conectar(); //chamada da classe 
		$conexao=$c->conexao();//chamda da conexão

		$data = date('Y-m-d');

		//está fazendo uma consulta sql
		$sql = "INSERT into usuarios (nome, user, email, senha, dataCaptura) VALUES ('$dados[0]', '$dados[1]', '$dados[2]', '$dados[3]', '$data')";

		return mysqli_query($conexao, $sql);
	}

	//função de login do file login
	public function login($dados){
		$c = new conectar();
		$conexao=$c->conexao();
		

		$senha = sha1($dados[1]);
		//todo login tem que ter as sessoes iniciadas por questão de segurança e outras verificaçẽos
		$_SESSION['usuario'] = $dados[0];
		$_SESSION['iduser'] = self::trazerId($dados);



		//estou fazendo uma consulta ao banco de dados

		
		$sql = "SELECT * from usuarios where email = '$dados[0]' and senha = '$senha' ";
		$result = mysqli_query($conexao, $sql);

		//echo $sql;

		if(mysqli_num_rows($result) > 0){
			return 1;
		}else{
			return 0;
		}
	}

	public function trazerId($dados){
		$c = new conectar();
		$conexao=$c->conexao();

		$senha = sha1($dados[1]);

		$sql = "SELECT 	id from usuarios where email='$dados[0]' and senha = '$senha' ";
		//execultando a query
		$result = mysqli_query($conexao, $sql);
		return mysqli_fetch_row($result)[0];

	}
}

?>
