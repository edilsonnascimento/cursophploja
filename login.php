<?php 
	 include("login-banco.php");

	 $email = $_POST['email'];
	 $senha = $_POST['senha'];

	 if($usuario = buscaUsuario($conexao, $email, $senha)){
	 	header("Location: index.php?login=true");
	 }else{
	 	header("Location: index.php?login=false");
	 }
	 die();