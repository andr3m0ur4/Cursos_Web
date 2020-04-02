<?php 

	# Arquivo de configuração
	include './config/config.php';

	include_once './db/DB.php';
	include_once './class/AlunoCurso.php';

	$db = new DB();

	$aluno_curso = new AlunoCurso($db -> conexao);

	foreach ($_POST as $chave => $valor) {
		$aluno_curso -> __set($chave, $valor);
	}

	if ($aluno_curso -> inserir()) {
		header('location: index.php?pagina=matriculas');
	} else {
		header('location: index.php?pagina=inserir_matricula&erro');
	}
