<?php include("login-logica.php");

	logout();
	header("Location: index.php?logout=true");
	die();