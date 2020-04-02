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
			return $this -> $atributo;
		}

		public function buscar()
		{
			$instrucao = "SELECT * FROM tb_alunos";
			$consulta = mysqli_query($this -> conexao, $instrucao);
			return $consulta;
		}

		public function inserir()
		{
			if (empty($this -> nome) || empty($this -> idade) || empty($this -> email) || empty($this -> interesse))
			{
				return false;
			}

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

			$retorno = mysqli_query($this -> conexao, $instrucao);

			return $retorno;
		}

		public function editar()
		{
			if (empty($this -> nome) || empty($this -> idade) || empty($this -> email) || empty($this -> interesse))
			{
				return false;
			}

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

			$retorno = mysqli_query($this -> conexao, $instrucao);

			return $retorno;
		}

		public function excluir($id_aluno)
		{
			$instrucao = "DELETE FROM tb_alunos WHERE id_aluno = $id_aluno";
			$retorno = mysqli_query($this -> conexao, $instrucao);
			return $retorno;
		}
	}
