<?php include("cabecalho.php");?>

<?php
	$nome = $_GET["nome"];
	$preco = $_GET["preco"];
    $conexao = mysqli_connect('localhost:3310', 'root', '', 'loja');

	$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";



	if (mysqli_query($conexao, $query)){
		?> <p class="alert-success">Produto <?php echo $nome; ?> no valor de  <?php echo $preco?> adicionado com sucesso!</p> <?php            		
	} else{
	   ?> <p class="alert-danger">Produto NÃO pode ser adicionado!</p> <?php  	
	} ?>
	
<?php include("rodape.php");?>