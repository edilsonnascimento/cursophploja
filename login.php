<?php 
	include("login-banco.php");
	include("login-logica.php");

	$email = $_POST['email'];
	$senha = $_POST['senha'];
     
    $usuario = buscaUsuario($conexao, $email, $senha);

	if($usuario == null){
        $_SESSION["danger"] = "Usuário ou senha inválida.";
		header("Location: index.php");
		die();
	}else{
		logaUsuario($email);
		$_SESSION["success"] = "Você está logado.";
	 	header("Location: index.php");
	 	die();
	}
  