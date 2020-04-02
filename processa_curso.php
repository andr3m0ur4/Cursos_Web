<?php 

	# Arquivo de configuração
	include './config/config.php';

	include_once './db/DB.php';
	include_once './class/Curso.php';

	$db = new DB();

	$curso = new Curso($db -> conexao);

	foreach ($_POST as $key => $value) {
		$curso -> __set($key, $value);
	}

	$curso -> inserir();

	header('location: index.php?pagina=cursos');
