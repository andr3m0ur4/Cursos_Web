<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Cursos Web</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
			integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" 
			crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/9066f92678.js"></script>
		<link rel="stylesheet" href="css/estilo.css">
	</head>

	<body>
		<header class="sticky-top">
			<div class="container d-flex justify-content-between">
				<a href="?pagina=home">
					<img src="img/logo.png" title="Logo" alt="Logo" height="90" width="145">
				</a>
				<div id="menu">
					<a href="?pagina=cursos">Cursos</a>
					<a href="?pagina=alunos">Alunos</a>
					<a href="?pagina=matriculas">Matrículas</a>
					<?php if (isset($_SESSION['login'])) : ?>
						<a href="logout.php"><?= $_SESSION['usuario'] ?> (Sair)</a>
					<?php endif ?>
				</div>
			</div>
		</header>

		<div id="conteudo" class="container">
