<?php 

	class Aluno
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
			$instrucao = "SELECT * FROM tb_alunos";
			$consulta = mysqli_query($this -> conexao, $instrucao);
			return $consulta;
		}

		public function inserir()
		{
			$instrucao = "
				INSERT INTO tb_alunos (nome, idade, interesse, email, estado) 
				VALUES (
					'{$this -> nome}',
					{$this -> idade},
					'{$this -> interesse}',
					'{$this -> email}',
					'{$this -> estado}'
				)
			";

			mysqli_query($this -> conexao, $instrucao);
		}

		public function editar()
		{
			$instrucao = "
				UPDATE tb_alunos
				SET 
					nome = '{$this -> nome}',
					idade = {$this -> idade},
					interesse = '{$this -> interesse}',
					email = '{$this -> email}',
					estado = '{$this -> estado}'
				WHERE id_aluno = {$this -> id_aluno}
			";

			mysqli_query($this -> conexao, $instrucao);
		}

		public function excluir($id_aluno)
		{
			$instrucao = "DELETE FROM tb_alunos WHERE id_aluno = $id_aluno";
			mysqli_query($this -> conexao, $instrucao);
		}
	}
