<?php require_once("mostra-alerta.php");
      error_reporting(E_ALL ^ E_NOTICE);
      mostraAlerta($tipo);
?>
<html>
<head>
    <meta charset="UTF-8">
    <link href="resorces/css/loja.css" rel="stylesheet" >
    <link href="resorces/css/bootstrap.css" rel="stylesheet" >
    <title>Minha loja</title>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Minha Loja</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="produto-formulario.php">Adiciona Produto</a></li>
                    <li><a href="produto-lista.php">Produtos</a></li>
                    <li><a href="logout.php">Sair</a></li>
                </ul>
            </div>
        </div><!-- container acaba aqui -->
    </div>

    <div class="container">

        <div class="principal">