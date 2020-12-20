<?php
include "conexao.php";

if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuario where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
		session_start();
	  }	
			$_SESSION['usuario'] = 'logado';
			header('Location: index.php');
} else {
	$_SESSION['nao_autenticado'] = true;
	echo '<script>
        window.alert("Usuário ou senha incorretos. Tente novamente.");
        window.location.href = "http://localhost/Furquim/Projeto%20Final/REISDOGESSO/login.php";
        </script>'; 
	exit();
}
?>