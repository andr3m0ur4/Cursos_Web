<?php 

	# Arquivo de configuração
	include './config/config.php';

	include_once './db/DB.php';
	include_once './class/AlunoCurso.php';

	$db = new DB();

	$aluno_curso = new AlunoCurso($db -> conexao);

	foreach ($_POST as $key => $value) {
		$aluno_curso -> __set($key, $value);
	}

	$aluno_curso -> inserir();

	header('location: index.php?pagina=matriculas');
