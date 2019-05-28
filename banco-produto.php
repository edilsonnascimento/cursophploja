<?php	
	include("conecta.php");
	
	function listaProduto($conexao){
		$resultado = mysqli_query($conexao, "SELECT * FROM produtos");
		$produtos = array();
		
		while ($produto = mysqli_fetch_assoc($resultado)) {
	    	array_push($produtos, $produto);
		}
		return $produtos;
	}

 	function insereProduto($conexao, $nome, $preco, $descricao){
 		$query = "insert into produtos (nome, preco, descricao) values ('{$nome}', {$preco}, '{$descricao}')";
 		return mysqli_query($conexao, $query);
 	}	

 	function removeProduto($conexao, $id){
 		$query = "DELETE FROM produtos WHERE id = {$id}";
 		return mysqli_query($conexao, $query);
 	}