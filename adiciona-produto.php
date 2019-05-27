<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php 
 	function insereProduto($conexao, $nome, $preco){
 		$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
 		return mysqli_query($conexao, $query);
 	}

	$nome = $_GET["nome"];
	$preco = $_GET["preco"];

	if (insereProduto($conexao, $nome, $preco)){
		?> <p class="text-success">Produto <?php echo $nome; ?> no valor de  <?php echo $preco?> adicionado com sucesso!</p> <?php            		
	} else{
		?> <p class="text-danger">Produto NÃO pode ser adicionado!</p> 
		<?php $msg = mysql_error($conexao);
	} ?>

<?php include("rodape.php");?>