<?php 
 	require_once("cabecalho.php"); 
 	require_once("categoria-banco.php");
 	require_once("login-logica.php");

    verificaUsuario();

    $produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
    $usado = "";
 	$categorias = listaCategorias($conexao);
 ?>
	<h1>Fomulario de Cadastro </h1>
	<form action="produto-adiciona.php" method="post">
		<table class="table">

			<?php require_once("produto-formulario-base.php"); ?>

		    <tr>
		    	<td><input class="btn-primary" type="submit" value="Cadastrar"></td>
		    </tr>
		</table>
	</form>

<?php require_once("rodape.php"); ?>