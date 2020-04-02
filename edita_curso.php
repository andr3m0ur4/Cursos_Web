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

	if ($curso -> editar()) {
		header('location: index.php?pagina=cursos');
	} else {
		$id_curso = $curso -> __get('id_curso');
		header("location: index.php?pagina=editar_curso&id_curso=$id_curso&erro");
	}
