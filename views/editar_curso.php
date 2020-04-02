<?php if (isset($_GET['id_curso'])) : ?>
	<?php foreach ($curso -> buscar() as $curso ) : ?>
		<?php if ($curso['id_curso'] === $_GET['id_curso']) : ?>

			<h1>Editar curso</h1>

			<form method="post" action="edita_curso.php">
				<input type="hidden" name="id_curso" value="<?= $curso['id_curso'] ?>">
				<label class="badge badge-secondary">Nome do curso:</label>
				<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" 
					value="<?= $curso['nome_curso'] ?>">
				<br>
				<label class="badge badge-secondary">Investimento:</label>
				<input class="form-control" type="text" name="investimento" placeholder="Insira o investimento"
					value="<?= $curso['investimento'] ?>">
				<br>
				<label class="badge badge-secondary">Carga horária</label>
				<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária"
					value="<?= $curso['carga_horaria'] ?>">
				<br>
				<label class="badge badge-secondary">Resumo do curso:</label>
				<textarea class="form-control" name="resumo" 
					placeholder="Insira o resumo do curso"><?= $curso['resumo'] ?></textarea>
				<br>
				<button class="btn btn-success" type="submit">Editar curso</button>
			</form>

		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>
