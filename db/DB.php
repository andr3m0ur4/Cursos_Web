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
		}

		public function buscarCursos()
		{
			$instrucao = "SELECT * FROM tb_cursos";
			$consulta = mysqli_query($this -> conexao, $instrucao);
			return $consulta;
		}

		public function buscarAlunos()
		{
			$instrucao = "SELECT * FROM tb_alunos";
			$consulta = mysqli_query($this -> conexao, $instrucao);
			return $consulta;
		}

		public function buscarAlunosCursos()
		{
			$instrucao = "
				SELECT
					a.nome,
					c.nome_curso,
					ac.id_aluno,
					ac.id_curso
				FROM
					tb_alunos AS a
				INNER JOIN 
					tb_alunos_cursos AS ac
				ON (a.id_aluno = ac.id_aluno)
				INNER JOIN 
					tb_cursos AS c
				ON (ac.id_curso = c.id_curso)
			";

			$consulta = mysqli_query($this -> conexao, $instrucao);
			return $consulta;
		}

		public function __destruct()
		{
			mysqli_close($this -> conexao);
		}
	}
