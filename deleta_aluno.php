<?php 

	# Arquivo de configuração
	include './config/config.php';

	include_once './db/DB.php';
	include_once './class/Aluno.php';

	$db = new DB();

	$aluno = new Aluno($db -> conexao);

	$aluno -> excluir($_GET['id_aluno']);

	header('location: index.php?pagina=alunos');
