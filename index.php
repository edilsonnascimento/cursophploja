<?php include("cabecalho.php");
      include("login-logica.php");

    
	if(isset($_SESSION["danger"])) { ?>
		<p class="text-danger"><?=$_SESSION["danger"]?></p>
	<?php 
	    unset($_SESSION["danger"]);
    } 
  	if(isset($_SESSION["success"])) { ?>
		<p class="text-success"><?=$_SESSION["success"]?></p>
	<?php 
	    unset($_SESSION["success"]);
	    ?> <h2>Bem vindo ao sistema</h2>
<?php }else{ ?>
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
<?php } ?>  

<?php include("rodape.php");?>