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

	if ($aluno -> editar()) {
		header('location: index.php?pagina=alunos');
	} else {
		$id_aluno = $aluno -> __get('id_aluno');
		header("location: index.php?pagina=editar_aluno&id_aluno=$id_aluno&erro");
	}
