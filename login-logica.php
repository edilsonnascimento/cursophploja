<?php

	function usuarioEstaLogado() {
    	return isset($_COOKIE["usuario_logado"]);
	}

	function verificaUsuario() {
	  if(!usuarioEstaLogado()) {
	     header("Location: index.php?falhaDeSeguranca=1");
	     die();
	  }
	}	

	function usuarioLogado() {
	    return $_COOKIE["usuario_logado"];
	}

	function logaUsuario($usuario){
		if($usuario == null){
			header("Location: index.php?login=0");
		}else{
			setcookie("usuario_logado", $usuario["email"], time() + 60);
	 		header("Location: index.php?login=1");
		}
		die();
	}