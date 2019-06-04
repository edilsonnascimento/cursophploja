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
