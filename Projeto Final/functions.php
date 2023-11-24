<?php
$server = "localhost";
$userDb = "GUSTAVO";
$passDb = "teste";
$database = "gustavonoite";

$connect = mysqli_connect($server, $userDb, $passDb, $database);

function login($connect){
	if ( isset($_POST['login']) ) {
		$email = mysqli_real_escape_string( $connect, $_POST['email'] );
		$senha = mysqli_real_escape_string( $connect, $_POST['senha'] );
		if (!empty($email) and !empty($senha)) {
			$query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
			$execute = mysqli_query($connect, $query);
			//retorna array associativo (apenas resultado)
			$result = mysqli_fetch_assoc($execute);
			//Verifica se encontrou um email e senha
			if ( !empty($result['email']) ) {
				//inicia session (loga)
				session_start();
				$_SESSION['nome'] = $result['nome'];
				$_SESSION['email'] = $result['email'];
				$_SESSION['ativa'] = true;
				//Redireciona para uma página
				header("location: admin.php");
			}else{
				echo "E-mail ou senha não encontrados";
			}
		}else{
			echo "E-mail ou senha incorretos!";
		}
	}
}

function deslogar(){
	session_start();
	//limpar caches
	session_unset();
	//Encerra a sessão
	session_destroy();
	header("location: login.php");
}

function insertUser($connect){
if (isset( $_POST['cadastrar'] )) {
	$erros = array();
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if ( empty( $email )) {
		$erros[] = "Preencha seu e-mail corretamente.";
	}
	if ( empty( $_POST['senha']) ) {
		$erros[] = "Preencha sua senha.";
	}
	if ($_POST['senha'] != $_POST['repete-senha']) {
		$erros[] = "Senhas não conferem!";
	}
	//chegou até essa linha sem erros
	if (empty($erros)) {
		$nome = mysqli_real_escape_string($connect, $_POST['nome']);
		$email = mysqli_real_escape_string($connect, $email);
		$senha = sha1($_POST['senha']);
		//Verifica se o e-mail existe no banco de dados
		$queryEmail = "SELECT email FROM usuarios WHERE email = '$email' ";
		$executeEmail = mysqli_query($connect, $queryEmail);
		$buscaEmail = mysqli_num_rows($executeEmail);
		if ($buscaEmail > 0) {
			echo "Erro ao inserir. E-mail já cadastrado no sistema!";
		}else{
			$query = "INSERT INTO usuarios (nome, email, senha, data_cadastro) VALUES ( '$nome', '$email', '$senha', NOW() )";
			$execute = mysqli_query($connect, $query);
			if ($execute) {
				echo "Usuário inserido com sucesso";
			}else{
				echo "Erro ao inserir Usuário!";
			}
		}
	}else{
		foreach ($erros as $erro) {
			echo $erro . "<br>";
		}
	}	
}
}
function delete($connect, $id){
	$query = "DELETE FROM usuarios WHERE id = $id";
	$action = mysqli_query( $connect, $query );
	if ($action) {
		echo "Registro deletado com sucesso";
		header("location: insert.php");
	}else{
		echo "Erro ao deletar";
	}
}

function getUsers($connect){
	$query = "SELECT * FROM usuarios WHERE 1 ORDER BY nome";
	$action = mysqli_query( $connect, $query );
	//Retorna apenas o 1º valor da tabela
	//$results = mysqli_fetch_assoc($action);
	//MYSQLI_BOTH - MYSQLI_NUM - MYSQLI_ASSOC
	$results = mysqli_fetch_all($action, MYSQLI_ASSOC);
	return $results;
}

?>
