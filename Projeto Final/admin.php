<?php session_start(); 
	require_once 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Portal ADM</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<?php require_once "menu.php"; ?>
	<?php if ( isset($_SESSION['ativa']) ) { ?>		
	<div class="admin">
		<h1>
			Bem vindo ao painel administrativo do site!
		</h1>
		<p>
			Olá <?php echo $_SESSION['email']; ?>, aqui você tem acesso as ferramentas para administrar seu sistema.
		</p>
	</div>

	<?php insertUser($connect); ?>

	<form method="post">
		<input type="text" name="nome" placeholder="Seu nome" required>
		<input type="email" name="email" placeholder="Seu E-mail" required>
		<input type="password" name="senha" placeholder="Sua senha" required>
		<input type="password" name="repete-senha" placeholder="Repita sua senha" required>

		<input type="submit" name="cadastrar">		
	</form>

	<h3>Deletar usuário</h3>
	<form method="post">
		<input type="email" name="email" placeholder="Email para Deletar"required> 
		<input type="submit" name="deletar">
	</form>

	<?php
if (isset($_POST['deletar'])) {
    $email = $_POST['email'];
    delete($connect, $email);
}
?>

	<h3>Aqui você pode verificar todos os usuários cadastrados na plataforma de administrador</h3>
	<?php $users = getUsers($connect); 
    if ($users) {
		echo '<table>';
		echo '<thead>';
		echo '<tr>';
		echo '<th>ID</th>';
		echo '<th>Nome</th>';
		echo '<th>Email</th>';
		echo '<th>Foto</th>'; 
		echo '<th>Atualizar Email</th>'; 
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
	
		foreach ($users as $user) {
			echo '<tr>';
			echo '<td>' . $user['id'] . '</td>';
			echo '<td>' . $user['nome'] . '</td>';
			echo '<td>' . $user['email'] . '</td>';
			echo '<td><img src="' . $user['foto'] . '" alt="Foto do Usuário" style="width: 50px; height: 50px;"></td>';
			echo '</tr>';
		}
	
		echo '</tbody>';
		echo '</table>';
	} else {
		echo '<p>Nenhum usuário encontrado.</p>';
	}

	?>
<?php

$userId = $_GET['user_id']; 
$userData = getUserData($connect, $userId);

// Verificar se o formulário foi enviado
if (isset($_POST['editar'])) {
    $userId = $_POST['user_id'];
    $newEmail = $_POST['new_email'];

    // Chamar a função para editar o usuário
    updateUsers($connect, $userId, $newEmail);
}
 ?>


    <h3>Editar Usuário</h3>

    <?php
    if ($userData) {
    ?>
        <form method="post" action="admin.php">
            <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
            
            <label for="new_email">Novo E-mail:</label>
            <input type="email" id="new_email" name="new_email" value="<?php echo $userData['email']; ?>" required>
            <!-- Inclua outros campos do usuário conforme necessário -->

            <input type="submit" name="editar" value="Editar">
        </form>
    <?php
    } else {
        echo '<p>Usuário não encontrado.</p>';
    }
    ?>

	<h3>Upload de fotos </h3>

	<form method="post" enctype="multipart/form-data" action="admin.php">
    <label for="foto_usuario">Selecione a foto:</label>
    <input type="file" name="foto_usuario" id="foto_usuario" accept="image/*" required>
    <input type="hidden" name="id_usuario" value="12"> 
    <button type="submit" name="submitPhoto">Enviar Foto</button>
</form>

<?php 
if (isset($_POST['submitPhoto'])) {
    $userId = $_POST['id_usuario'];
    $uploadDir = 'image/';

    if (isset($_FILES['foto_usuario'])) {
        $uploadedFile = uploadPhoto($_FILES['foto_usuario'], $uploadDir, $connect, $userId);
        
        if ($uploadedFile) {
            echo "Upload da foto realizado com sucesso.";
            exit;
        } else {
            echo "Erro ao fazer o upload do arquivo.";
        }
    }
}
?>
<?php
    $countryData = getCountries($connect);

    // Verifique se os dados do país foram encontrados
    if ($countryData && is_array($countryData)) {
?>
    <h1>Editar País</h1>

    <form method="post" action="admin.php" enctype="multipart/form-data">
        <input type="hidden" name="country_id" value="<?php echo $countryId; ?>">

        <label for="new_country_image">Nova Imagem do País:</label>
        <input type="file" id="new_country_image" name="new_country_image" accept="image/*">

        <input type="submit" name="edit_country" value="Salvar Alterações">
    </form>

<?php
    } else {
        echo '<p>País não encontrado ou dados inválidos.</p>';
    }

    if (isset($_POST['edit_country'])) {
        $countryId = $_POST['country_id'];
		$newCountryImage = $_POST['new_country_image'];
        // Chamar a função para editar o nome do país
        editCountryImage($connect, $countryId);
    }
?>


	<a class="sair" href="deslogar.php">Sair</a>
	<?php } else {
		echo "<p>Você não tem acesso a esta página.</p>";
	} ?>



</body>
</html>