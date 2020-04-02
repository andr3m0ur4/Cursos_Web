<?php 

	class DB
	{
		private $servidor;
		private $usuario;
		private $senha;
		private $db;
		public $conexao;

		public function __construct()
		{
			$this -> servidor = SERVIDOR;
			$this -> usuario = USUARIO;
			$this -> senha = SENHA;
			$this -> db = DB;

			$this -> conexao = mysqli_connect($this -> servidor, $this -> usuario, $this -> senha, $this -> db);
			mysqli_set_charset($this -> conexao, 'utf8');
		}

		public function __destruct()
		{
			mysqli_close($this -> conexao);
		}
	}
