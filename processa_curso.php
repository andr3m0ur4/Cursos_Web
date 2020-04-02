<?php 

	# Arquivo de configuração
	include './config/config.php';

	include_once './db/DB.php';
	include_once './class/Curso.php';

	$db = new DB();

	$curso = new Curso($db -> conexao);

	foreach ($_POST as $chave => $valor) {
		$curso -> __set($chave, $valor);
	}

	if ($curso -> inserir()) {
		header('location: index.php?pagina=cursos');
	} else {
		header('location: index.php?pagina=inserir_curso&erro');
	}
