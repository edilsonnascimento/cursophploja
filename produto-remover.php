<?php 
     include("cabecalho.php");
     include("produto-banco.php");
     include("login-logica.php");
?>

<?php 
	$id = $_POST['id'];
	removeProduto($conexao, $id);
	$_SESSION["success"] = "Produto removido com sucesso.";
	header("Location: produto-lista.php");
	die();
?>

<?php include("rodape.php");?>