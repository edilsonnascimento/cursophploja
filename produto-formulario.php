<?php 
 	include("cabecalho.php"); 
 	include("categoria-banco.php");


 	$categorias = listaCategorias($conexao);
 ?>

  
	<h1>Fomulario de Cadastro </h1>
	<form action="produto-adiciona.php" method="post">
		<table class="table">
		    <tr>
		    	<td>Nome: </td>
		    	<td><input class="form-control" type="text" name="nome" /><br/></td>
		    </tr>
		    <tr>
		    	<td>Preço: </td>
		    	<td><input class="form-control" type="number" name="preco" /><br/></td>
		    </tr>
		    <tr>
		    	<td>Descricao: </td>
		    	<td>
		    		<textarea class="form-control" type="text" name="descricao"></textarea>
		    		<br/>
		    	</td>
		    </tr>
		    <tr>
		    	<td>Categorias: </td>
		    	<td>
		    		<?php foreach($categorias as $categoria) : ?>	
		    			<input type="radio" name="categoria_id" value="<?=$categoria['id']?>"> 
		    			<?=$categoria['nome']?> <br />
		    		<?php endforeach ?>
		    	</td>		    	
		    </tr>
		    <tr>
		    	<td><input class="btn-primary" type="submit" value="Cadastrar" /></td>
		    </tr>
		</table>
	</form>

<?php include("rodape.php"); ?>