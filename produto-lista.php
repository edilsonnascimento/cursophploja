<?php 
      require_once("cabecalho.php");
      require_once("produto-banco.php");
      require_once("categoria-banco.php");

	mostraAlerta("success");
?>

<table class="table table-striped table-bordered">
	<?php $produtos = listaProduto($conexao); 
		foreach ($produtos as $produto) :
			?>
				<tr>
			       <td><?=$produto['nome']?></td>
			       <td><?=$produto['preco']?></td>
			       <td><?=substr($produto['descricao'], 0, 60)?></td>
			       <td><?=$produto['categoria_nome']?></td>
			       <td>
			       		<?php 
			       			if($produto['usado'] == 0){ ?>
			       				Não
			       			<?php }
			       			else{ ?>
			       				Sim
			       			<?php }
			       		?>
			        </td>
			        <td>
			       		<a class="btn btn-primary" href="produto-formulario-altera.php?id=<?=$produto['id']?>">alterar</a>
			       	</td>
			       <td>
					   <form action="produto-remover.php" method="post">
					   	    <input name="id" type="hidden" value="<?=$produto['id']?>" />
				            <button class="btn btn-danger">remover</button>
				       </form>
				   </td>
			   </tr>
		<?php endforeach?>
</table>	

<?php require_once("rodape.php");?>