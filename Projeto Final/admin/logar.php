<?php
$usuarios = [
	"admin@email.com" => "12345",
	"carlos@email.com" => "CDZ",
	"joao@email.com" => "99885522",
	"luciano@email.com" => "101010",
	"gustavo@gmail.com" => "teste123"
];
if ( isset($_POST['login']) ) {	
	if ( !empty($_POST['email']) ) {
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		if (array_key_exists($email, $usuarios) ) {
			if ($usuarios[$email] == $senha) {
				session_start();
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['ativa'] = true;
				header("location: admin.php");
			}else{
				echo "Senha inválida";
			}		
		}else{
			echo "E-mail inválido";
		}		
	}else{
		echo "E-mail ou senha inválidos<br>";
		echo "<a href='login.php'>Tentar Novamente</a>";
	}
}else{
	header("location: login.php");
}