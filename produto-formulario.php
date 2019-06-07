<?php 
 	include("cabecalho.php"); 
 	include("categoria-banco.php");
 	include("login-logica.php");

    verificaUsuario();

    $produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
    $usado = "";
 	$categorias = listaCategorias($conexao);
 ?>
	<h1>Fomulario de Cadastro </h1>
	<form action="produto-adiciona.php" method="post">
		<table class="table">

			<?php include("produto-formulario-base.php"); ?>

		    <tr>
		    	<td><input class="btn-primary" type="submit" value="Cadastrar"></td>
		    </tr>
		</table>
	</form>

<?php include("rodape.php"); ?>