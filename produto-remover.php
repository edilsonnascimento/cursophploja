<?php 
     require_once("cabecalho.php");
     require_once("produto-banco.php");
     require_once("login-logica.php");
?>

<?php 
	$id = $_POST['id'];
	removeProduto($conexao, $id);
	$_SESSION["success"] = "Produto removido com sucesso.";
	header("Location: produto-lista.php");
	die();
?>

<?php require_once("rodape.php");?>