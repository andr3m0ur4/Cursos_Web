<?php if ( !isset ( $_GET['editar'] ) ) { ?>

<h1>Inserir novo aluno</h1>

<form method="post" action="processa_aluno.php">
	<label class="badge badge-secondary">Nome aluno:</label>
	<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
	<br>
	<label class="badge badge-secondary">Idade:</label>
	<input class="form-control" type="text" name="idade" placeholder="Insira a idade">
	<br>
	<label class="badge badge-secondary">E-mail:</label>
	<input class="form-control" type="email" name="email" placeholder="Insira o e-mail">
	<br>
	<label class="badge badge-secondary">Interesse:</label>
	<select class="form-control" name="interesse">
		<option value="">Escolha o interesse</option>
		<option value="Esporte">Esporte</option>
		<option value="Saúde">Saúde</option>
		<option value="Jogos">Jogos</option>
		<option value="Música">Música</option>
		<option value="Informática">Informática</option>
	</select>
	<br>
	<label class="badge badge-secondary">Estado:</label>
	<input class="form-control" type="text" name="estado" placeholder="Insira o estado">
	<br>
	<button type="submit" class="btn btn-success">Cadastrar aluno</button>
</form>

<?php 
} else {
	while ( $linha = mysqli_fetch_assoc ( $consulta_alunos ) ) {
		if ( $linha['id_aluno'] == $_GET['editar'] ) { 
?>
			<h1>Editar aluno</h1>
				<form method="post" action="edita_aluno.php">
					<input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
					<br>
					<label class="badge badge-secondary">Nome aluno:</label><br>
					<input class="form-control" type="text" name="nome_aluno" 
						placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>">
					<br><br>
					<label class="badge badge-secondary">Data de nascimento:</label><br>
					<input class="form-control"  type="text" name="data_nascimento" 
						placeholder="Insira a data de nascimento" 
						value="<?php echo $linha['data_nascimento']; ?>"><br><br>
					<input class="btn btn-success" type="submit" value="Editar aluno">
				</form>
		<?php
		}
	}
} 
?>