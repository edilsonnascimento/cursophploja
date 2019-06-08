<?php 
 	require_once("cabecalho.php"); 
 	require_once("categoria-banco.php");
 	require_once("produto-banco.php");


 	$categorias = listaCategorias($conexao);
 	$id = $_GET['id'];
 	$produto = buscaProduto($conexao, $id);
 	$usado = $produto['usado'] ? "checked='checked'" : "";


 ?>
	<h1>Fomulário altera Produto</h1>
	<form action="produto-altera.php" method="post">
		<input type="hidden" name="id" value="<?=$produto['id']?>">
		<table class="table">

			<?php require_once("produto-formulario-base.php") ?>

		    <tr>
		    	<td><input class="btn-primary" type="submit" value="Alterar"></td>
		    </tr>
		</table>
	</form>

<?php require_once("rodape.php"); ?>