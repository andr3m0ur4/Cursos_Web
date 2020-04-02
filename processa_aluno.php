<?php 

	# Arquivo de configuração
	include './config/config.php';

	include_once './db/DB.php';
	include_once './class/Aluno.php';

	$db = new DB();

	$aluno = new Aluno($db -> conexao);

	foreach ($_POST as $chave => $valor) {
		$aluno -> __set($chave, $valor);
	}

	if ($aluno -> inserir()) {
		header('location: index.php?pagina=alunos');
	} else {
		header('location: index.php?pagina=inserir_aluno&erro');
	}
