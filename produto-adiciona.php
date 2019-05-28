<?php 
	include("cabecalho.php");
    include("produto-banco.php");

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id'];
	if(array_key_exists('usado', $_POST)){
		$usado = "true";
	}else{
		$usado = "false";
	}
	

	if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){
		?> <p class="text-success">Produto <?php echo $nome; ?> no valor de  <?php echo $preco?> adicionado com sucesso!</p> <?php            		
	} else{
		?> <p class="text-danger">Produto NÃO pode ser adicionado!</p> 
		<?php $msg = mysql_error($conexao);
	} ?>

<?php include("rodape.php");?>