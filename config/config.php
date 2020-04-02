<?php 

	# Iniciar sessão
	session_start();
	$login = $_SESSION['login'] ?? null;
	$usuario = $_SESSION['usuario'] ?? null;

	# Configurações do Banco de Dados
	define('SERVIDOR', 'localhost');
	define('USUARIO', 'root');
	define('SENHA', '');
	define('DB', 'db_curso_web');

	# Definições de usuários da página
	define('LOGIN', 'Andre');
	define('SENHA_LOGIN', '202cb962ac59075b964b07152d234b70');	// 123
