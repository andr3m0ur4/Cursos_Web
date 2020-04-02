<h1>Inserir novo curso</h1>

<form method="post" action="processa_curso.php">
	<label class="badge badge-secondary">Nome do curso:</label>
	<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
	<br>
	<label class="badge badge-secondary">Investimento:</label>
	<input class="form-control" type="text" name="investimento" placeholder="Insira o investimento">
	<br>
	<label class="badge badge-secondary">Carga horária</label>
	<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária">
	<br>
	<label class="badge badge-secondary">Resumo do curso:</label>
	<textarea class="form-control" name="resumo" placeholder="Insira o resumo do curso"></textarea>
	<br>
	<button type="submit" class="btn btn-success">Cadastrar curso</button>
</form>

<?php if (isset($_GET['erro'])) : ?>
	<div class="alert alert-danger mt-3" role="alert">
		Você deve preencher todos os campos para cadastrar um novo curso.
	</div>
<?php endif ?>
