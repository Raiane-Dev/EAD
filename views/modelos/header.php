<!DOCTYPE html>
<html>
<head>
    <title>EAD</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilo/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
</head>
<body>
<div class="ballet">
<iframe src="https://embed.lottiefiles.com/animation/9329"></iframe>
</div>
<header id="header">
	<div class="head">
		<div class="menu">
			<nav>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH ?>">Início</a></li>
					<li><a href="<?php echo INCLUDE_PATH ?>#sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH ?>#contato">Contato</a></li>
				</ul>
			</nav>
		</div>
		<div class="logo">
			<h2>Raiane Dev</h2>
		</div>
		<div class="menu">
			<nav>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH ?>#cursos">Cursos</a></li>
					<li><a href="<?php echo INCLUDE_PATH ?>login">Login</a></li>
					<li><a href="<?php echo INCLUDE_PATH ?>carrinho">Carrinho</a></li>
					<?php
						if(isset($_SESSION['login_aluno'])){
							echo '<li><a href="'.INCLUDE_PATH.'?deslogar">Sair</a></li>';
						}
					?>
				</ul>
			</nav>
		</div>
	</div>
</header>