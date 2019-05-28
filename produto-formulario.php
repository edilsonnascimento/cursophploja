<?php include("cabecalho.php"); ?>

	<h1>Fomulario de Cadastro </h1>
	<form action="adiciona-produto.php" method="post">
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
		    	<td><input class="btn-primary" type="submit" value="Cadastrar" /></td>
		    </tr>
		</table>
	</form>

<?php include("rodape.php"); ?>