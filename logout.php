<?php require_once("login-logica.php");
	logout();
    $_SESSION["success"] = "Deslogado com sucesso";
	header("Location: index.php");
	die();