<?php	
	include("conecta.php");
	
	function listaProduto($conexao){
		$resultado = mysqli_query($conexao, "SELECT p.*, c.nome AS categoria_nome FROM produtos AS p JOIN categorias AS c ON c.id = p.categoria_id");
		$produtos = array();
		
		while ($produto = mysqli_fetch_assoc($resultado)) {
	    	array_push($produtos, $produto);
		}
		return $produtos;
	}

	function buscaProduto($conexao, $id){
		$query = "select * from produtos where id = {$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}

 	function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
 		$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
 		return mysqli_query($conexao, $query);
 	}	

 	function removeProduto($conexao, $id){
 		$query = "DELETE FROM produtos WHERE id = {$id}";
 		return mysqli_query($conexao, $query);
 	}

	function altereProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado){
 		$query = "update produtos set nome='{$nome}', preco={$preco}, descricao='{$descricao}', categoria_id={$categoria_id}, usado={$usado} where id = {$id}";
 		return mysqli_query($conexao, $query);
 	}	
