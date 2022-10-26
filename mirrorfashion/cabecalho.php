<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php print $cabecalho_title; ?></title>
	<?php print @$reset_css; ?>
    <link rel="stylesheet" href="css/estilos.css">
	<?php print @$sobre_css; ?>
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
	<?php print @$cabecalho_css; ?>
    <meta name="viewport" content="width=device-width">
</head>
<body>
<header class="container">
	<a href="index.php"><img src="img/logo.png" alt="Logo da Mirror Fashion"></a>
	<p class="sacola">
	Nenhum item na sacola de compras
	</p>
	<nav class="menu-opcoes">
	<ul>
		<li><a href="#">Sua Conta</a></li>
		<li><a href="#">Lista de Desejos</a></li>
		<li><a href="#">Cartão Fidelidade</a></li>
		<li><a href="sobre.php">Sobre</a></li>
		<li><a href="#">Ajuda</a></li>
	</ul>
	</nav>
</header>
