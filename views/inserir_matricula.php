<h1>Inserir nova matrícula</h1>

<form method="post" action="processa_matricula.php">
	<label class="badge badge-secondary">Selecione o aluno</label>
	<select class="form-control" name="id_aluno">
		<option>Selecione um aluno</option>
		<?php foreach ($aluno -> buscar() as $aluno) : ?>
			<option value="<?= $aluno['id_aluno'] ?>"><?= $aluno['nome'] ?></option>
		<?php endforeach ?>
	</select>

	<br>

	<label class="badge badge-secondary">Selecione o curso</label>
	<select class="form-control" name="id_curso">
		<option>Selecione um curso</option>
		<?php foreach ($curso -> buscar() as $curso) : ?>
			<option value="<?= $curso['id_curso'] ?>"><?= $curso['nome_curso'] ?></option>
		<?php endforeach ?>
	</select>
	<br>
	<button type="submit" class="btn btn-success">Matricular aluno no curso</button>
</form>