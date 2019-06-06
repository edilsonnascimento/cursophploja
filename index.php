<?php include("cabecalho.php");
      include("login-logica.php");

    if(isset($_GET["logout"]) && $_GET["logout"]==true) { ?>
    	<p class="alert-success">Deslogado com sucesso</p>
	 <?php
	 }
     
    if(isset($_GET["login"]) && ($_GET["login"] == 0)) { ?>
		<p class="text-danger">Usuário ou senha inválida!!</p>
	<?php 
	}

    if(usuarioEstaLogado()) { ?>
    	<h2>Bem Vindo ao Sistema</h2>
		<p class="text-success">Você está logado como <?=usuarioLogado()?></p>
		<?php
		die();
	 }

	if(isset($_GET["falhaDeSeguranca"]) && ($_GET["falhaDeSeguranca"] == 1)) { ?>
		<p class="text-danger">Você não tem acesso a essa funcionalidade</p>
	<?php 

	}else{ ?>
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