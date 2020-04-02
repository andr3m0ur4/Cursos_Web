<h1>Inserir novo aluno</h1>

<form method="post" action="processa_aluno.php">
	<label class="badge badge-secondary">Nome aluno:</label>
	<input class="form-control" type="text" name="nome" placeholder="Insira o nome do aluno">
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
