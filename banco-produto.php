<?php	
	function listaProduto($conexao){
		$resultado = mysqli_query($conexao, "SELECT * FROM produtos");
		$produtos = array();
		
		while ($produto = mysqli_fetch_assoc($resultado)) {
	    	array_push($produtos, $produto);
		}
		return $produtos;
	}

 	function insereProduto($conexao, $nome, $preco){
 		$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
 		return mysqli_query($conexao, $query);
 	}	