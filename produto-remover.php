<?php 
     include("cabecalho.php");
     include("produto-banco.php");
?>

<?php 
	$id = $_POST['id'];
	removeProduto($conexao, $id);
	header("Location: produto-lista.php?removido=true");
	die();
?>

<?php include("rodape.php");?>