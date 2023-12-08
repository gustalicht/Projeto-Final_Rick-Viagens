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

function delete($connect, $email) {
    $email = mysqli_real_escape_string($connect, $email);
	$query = "DELETE FROM usuarios WHERE email = '$email'";
    $action = mysqli_query($connect, $query);
   
	
	if ($action) {
        echo "Registro deletado com sucesso";
    } else {
        echo "Erro ao deletar";
    }
}


function getUsers($connect){
	$query = "SELECT * FROM usuarios WHERE 1 ORDER BY nome";
	$action = mysqli_query( $connect, $query );

	$results = mysqli_fetch_all($action, MYSQLI_ASSOC);
	return $results;
	

}

function uploadPhoto($file, $uploadDir, $connect, $userId)
{
    $uploadFile = $uploadDir . basename($file['name']);
    
    if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
        $photoPath = mysqli_real_escape_string($connect, $uploadFile);
        $query = "UPDATE usuarios SET foto = '$photoPath' WHERE id = $userId";
        
        $execute = mysqli_query($connect, $query);
        
        if ($execute) {
            echo "Foto atualizada e upload realizado com sucesso";
            return $uploadFile; // Retorna o caminho do arquivo no servidor após o upload bem-sucedido
        } else {
            echo "Erro ao atualizar o caminho da foto no banco de dados.";
            // Se houver um erro ao atualizar o banco de dados, você pode optar por excluir o arquivo carregado para evitar inconsistências
            unlink($uploadFile);
            return false;
        }
    } else {
        echo "Erro ao fazer o upload do arquivo.";
        return false; // Retorna falso se houver erro no upload
    }
}


function getUserData($connect, $userId) {
    $userId = mysqli_real_escape_string($connect, $userId);
    $query = "SELECT * FROM usuarios WHERE id = '$userId'";
    $result = mysqli_query($connect, $query);
    return mysqli_fetch_assoc($result);
}

// Função para atualizar informações do usuário
function updateUsers($connect, $userId, $newEmail) {
    $userId = mysqli_real_escape_string($connect, $userId);
    $newEmail = mysqli_real_escape_string($connect, $newEmail);
    
    $query = "UPDATE usuarios SET email = '$newEmail' WHERE id = '$userId'";
    $action = mysqli_query($connect, $query);

    if ($action) {
        echo "Registro atualizado com sucesso";
    } else {
        echo "Erro ao atualizar";
    }
}

// Verificar se o formulário foi enviado
if (isset($_POST['editar'])) {
    $userId = $_GET['user_id']; // Certifique-se de obter o ID do usuário corretamente
    $newEmail = $_POST['new_email'];

    updateUsers($connect, $userId, $newEmail);
}


function getCountries($connect) {
	$countries = array();

    // Query para obter os países do banco de dados
    $query = "SELECT id, name, link, image FROM countries";
    $result = mysqli_query($connect, $query);

    // Verificar se a consulta foi bem-sucedida
    if ($result) {
        // Transformar os resultados em um array associativo
        while ($row = mysqli_fetch_assoc($result)) {
            $countries[] = $row;
        }

        // Liberar os recursos do resultado
        mysqli_free_result($result);
    } else {
        // Tratar erros, se necessário
        echo "Erro na consulta: " . mysqli_error($connect);
    }

    return $countries;
}
  

function editCountryImage($connect, $countryId) {
    // Verifique se uma nova imagem foi enviada
    if (isset($_FILES['new_country_image']) && $_FILES['new_country_image']['error'] == 0) {
        // Processar a nova imagem do país
        $uploadDir = 'image/';
		if (!file_exists($uploadDir)) {
            // Crie o diretório se não existir
            mkdir($uploadDir, 0777, true);
        }
        $newFileName = uniqid() . '_' . $_FILES['new_country_image']['name'];
        $targetPath = $uploadDir . $newFileName;

        if (move_uploaded_file($_FILES['new_country_image']['tmp_name'], $targetPath)) {
            // Atualizar apenas a imagem do país no banco de dados
            $query = "UPDATE countries SET image = '$targetPath' WHERE id = $countryId";
            $result = mysqli_query($connect, $query);

            if ($result) {
                echo "Imagem do país atualizada com sucesso.";
            } else {
                echo "Erro ao atualizar a imagem do país: " . mysqli_error($connect);
            }
        } else {
            echo "Erro ao fazer o upload da nova imagem do país.";
        }
    } else {
        echo "Nenhuma nova imagem foi enviada.";
    }
}

?>
