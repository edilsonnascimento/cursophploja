<?php 
 	include("cabecalho.php"); 
 	include("categoria-banco.php");
 	include("produto-banco.php");


 	$categorias = listaCategorias($conexao);
 	$id = $_GET['id'];
 	$produto = buscaProduto($conexao, $id);
 	$usado = $produto['usado'] ? "checked='checked'" : "";


 ?>
	<h1>Fomulário altera Produto</h1>
	<form action="produto-altera.php" method="post">
		<input type="hidden" name="id" value="<?=$produto['id']?>">
		<table class="table">

			<?php include("produto-formulario-base.php") ?>

		    <tr>
		    	<td><input class="btn-primary" type="submit" value="Alterar"></td>
		    </tr>
		</table>
	</form>

<?php include("rodape.php"); ?>