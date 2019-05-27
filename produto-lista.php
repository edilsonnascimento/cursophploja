<?php 
      include("cabecalho.php");
      include("banco-produto.php");
?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido'] == true){ ?>
   <p class="alert-success">Produto apagado com sucesso.</p> 	
<?php } ?>

<table class="table table-striped table-bordered">
	<?php $produtos = listaProduto($conexao); 
		foreach ($produtos as $produto) :
			?>
				<tr>
			       <td><?=$produto['nome']?></td>
			       <td><?=$produto['preco']?></td>
			       <td class="btn btn-danger">
			       		<a href="produto-remover.php?id=<?=$produto['id']?>">REMOVER</a>
			       </td>
			   </tr>
			<?php
		endforeach
	?>
</table>	

<?php include("rodape.php");?>