<?php 

	class Curso
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
			return $this -> $attr;
		}

		public function buscar()
		{
			$instrucao = "SELECT * FROM tb_cursos";
			$consulta = mysqli_query($this -> conexao, $instrucao);
			return $consulta;
		}

		public function inserir()
		{
			$instrucao = "
				INSERT INTO tb_cursos (nome_curso, resumo, investimento, carga_horaria)
				VALUES (
					'{$this -> nome_curso}',
					'{$this -> resumo}',
					{$this -> investimento},
					{$this -> carga_horaria}
				)
			";

			mysqli_query($this -> conexao, $instrucao);
		}

		public function editar()
		{
			$instrucao = "
				UPDATE tb_cursos 
				SET 
					nome_curso = '{$this -> nome_curso}',
					carga_horaria = {$this -> carga_horaria},
					investimento = {$this -> investimento},
					resumo = '{$this -> resumo}'
				WHERE id_curso = {$this -> id_curso}
			";

			mysqli_query($this -> conexao, $instrucao);
		}

		public function excluir($id_curso)
		{
			$instrucao = "DELETE FROM tb_cursos WHERE id_curso = $id_curso";
			mysqli_query($this -> conexao, $instrucao);
		}
	}
