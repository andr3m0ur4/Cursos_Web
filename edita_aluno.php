<?php 

	# Arquivo de configuração
	include './config/config.php';

	include_once './db/DB.php';
	include_once './class/Aluno.php';

	$db = new DB();

	$aluno = new Aluno($db -> conexao);

	foreach ($_POST as $key => $value) {
		$aluno -> __set($key, $value);
	}

	$aluno -> editar();

	header('location: index.php?pagina=alunos');
