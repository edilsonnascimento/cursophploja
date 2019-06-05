<?php 
	 include("login-banco.php");
	 include("login-logica.php");

	 $email = $_POST['email'];
	 $senha = $_POST['senha'];


	 if($usuario = buscaUsuario($conexao, $email, $senha)){
	 	logaUsuario($usuario);
	 }