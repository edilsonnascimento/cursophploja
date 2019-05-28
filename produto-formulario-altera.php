<?php 
 	include("cabecalho.php"); 
 	include("categoria-banco.php");
 	include("produto-banco.php");


 	$categorias = listaCategorias($conexao);
 	$id = $_GET['id'];
 	$produto = buscaProduto($conexao, $id);

 ?>

  
	<h1>Fomulário altera Produto</h1>
	<form action="produto-altera.php" method="post">
		<input type="hidden" name="id" value="<?=$produto['id']?>">
		<table class="table">
		    <tr>
		    	<td>Nome:</td>
		    	<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"><br/></td>
		    </tr>
		    <tr>
		    	<td>Preço:</td>
		    	<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"><br/></td>
		    </tr>
		    <tr>
		    	<td>Descricao:</td>
		    	<td>
		    		<textarea class="form-control" type="text" name="descricao"><?=$produto['descricao']?></textarea>
		    		<br/>
		    	</td>
		    </tr>
		    <tr>
		    	<td></td>
		    	<td>
		    		<?php $usado = $produto['usado'] ? "checked='checked'" : "";?>
		    		<input type="radio" name="usado" <?=$usado?> value="true">
		    		Usado
		    	</td>   	
		    </tr>
		    <tr>
		    	<td>Categorias: </td>
		    	<td>
		    		<select name="categoria_id">
			    		<?php 
			    			foreach ($categorias as $categoria) :  
			    				$essaEhAcategoriaProduto = $produto['categoria_id'] == $categoria['id'];
			    				$selecao = $essaEhAcategoriaProduto ? "selected='selected'" : "";?>
			    				<option value="<?=$categoria['id']?>" <?=$selecao?>>
			    				<?=$categoria['nome']?>
			    				</option>			    					
			    		<?php endforeach ?>		    			
		    		</select>
		    	</td>
		    </tr>
		    <tr>
		    	<td><input class="btn-primary" type="submit" value="Alterar"></td>
		    </tr>
		</table>
	</form>

<?php include("rodape.php"); ?>