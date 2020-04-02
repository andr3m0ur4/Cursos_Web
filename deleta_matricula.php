<?php 

	# Arquivo de configuração
	include './config/config.php';

	include_once './db/DB.php';
	include_once './class/AlunoCurso.php';

	$db = new DB();

	$aluno_curso = new AlunoCurso($db -> conexao);

	if ($aluno_curso -> excluir($_GET['id_aluno'], $_GET['id_curso'])) {
		header('location: index.php?pagina=matriculas');
	} else {
		header('location: index.php?pagina=matriculas&erro');
	}
