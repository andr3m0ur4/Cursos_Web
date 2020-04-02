<?php 

	class AlunoCurso
	{
		public $conexao;

		public function __construct($conexao)
		{
			$this -> conexao = $conexao;
		}

		public function __set($atributo, $valor)
		{
			$this -> $atributo = $valor;
		}

		public function __get($atributo)
		{
			return $this -> $atributo;
		}

		public function buscar()
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

		public function inserir()
		{
			$instrucao = "
				INSERT INTO tb_alunos_cursos (id_aluno, id_curso) 
				VALUES ({$this -> id_aluno}, {$this -> id_curso})
			";

			$retorno = mysqli_query($this -> conexao, $instrucao);

			return $retorno;
		}

		public function excluir($id_aluno, $id_curso)
		{
			$instrucao = "
				DELETE FROM tb_alunos_cursos 
				WHERE id_aluno = $id_aluno AND id_curso = $id_curso
			";
			
			$retorno = mysqli_query($this -> conexao, $instrucao);

			return $retorno;
		}
	}
