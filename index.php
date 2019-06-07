<?php include("cabecalho.php");

mostraAlerta("danger");
mostraAlerta("success");
?>
	<h2>Login</h2>
	<form action="login.php" method="post">
		  <div class="form-group">
		  		<label>Email address</label>
		    	<input type="email" class="form-control" name="email" placeholder="Enter email">
		  </div>
		  <div class="form-group">
		    	<label>Password</label>
		    	<input type="password" class="form-control" name="senha" placeholder="Password">
		  </div>	 
		  <button type="submit" class="btn btn-primary">Logar</button>
	</form>

<?php include("rodape.php");?>