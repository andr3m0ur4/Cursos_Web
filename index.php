<?php

	# Arquivo de configuração
	include './config/config.php';

	# Base de dados
	include './db/DB.php';
	$db = new DB();

	# Classes
	include './class/Curso.php';
	include './class/Aluno.php';
	include './class/AlunoCurso.php';
	$curso = new Curso($db -> conexao);
	$aluno = new Aluno($db -> conexao);
	$aluno_curso = new AlunoCurso($db -> conexao);

	# Cabeçalho
	include './views/header.php';

	# Conteúdo da página

	if (isset($login)) {
		if (isset($_GET['pagina'])) {
			$pagina = $_GET['pagina'];
		} else {
			$pagina = 'cursos';
		}
	} else {
		$pagina = 'home';
	}

	switch ($pagina) {
		case 'cursos': 
			include './views/cursos.php'; 
			break;

		case 'alunos': 
			include './views/alunos.php'; 
			break;

		case 'matriculas': 
			include './views/matriculas.php'; 
			break;

		case 'inserir_aluno': 
			include './views/inserir_aluno.php'; 
			break;

		case 'inserir_matricula': 
			include './views/inserir_matricula.php'; 
			break;

		case 'inserir_curso': 
			include './views/inserir_curso.php'; 
			break;

		case 'editar_curso': 
			include './views/editar_curso.php'; 
			break;

		case 'editar_aluno': 
			include './views/editar_aluno.php'; 
			break;

		default: 
			include './views/home.php'; 
			break;
	}

	# Rodapé
	include './views/footer.php';
