<?php 

	# Arquivo de configuração
	include './config/config.php';

	include_once './db/DB.php';
	include_once './class/Curso.php';

	$db = new DB();

	$curso = new Curso($db -> conexao);

	if ($curso -> excluir($_GET['id_curso'])) {
		header('location: index.php?pagina=cursos');
	} else {
		header('location: index.php?pagina=cursos&erro');
	}
