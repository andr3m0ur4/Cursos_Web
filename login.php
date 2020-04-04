<?php

	# Arquivo de configuração - teste
	require './config/config.php';

	$usuario = addslashes($_POST['usuario']);
	$senha = md5 ( $_POST['senha'] );

	if ($usuario === LOGIN && $senha === SENHA_LOGIN) {
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['usuario'] = $usuario;
		header('location: index.php');
	} else {
		header('location: index.php?erro');
	}
