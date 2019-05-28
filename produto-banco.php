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

 	function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id){
 		$query = "insert into produtos (nome, preco, descricao, categoria_id) values ('{$nome}', {$preco}, '{$descricao}', '{$categoria_id}')";
 		return mysqli_query($conexao, $query);
 	}	

 	function removeProduto($conexao, $id){
 		$query = "DELETE FROM produtos WHERE id = {$id}";
 		return mysqli_query($conexao, $query);
 	}