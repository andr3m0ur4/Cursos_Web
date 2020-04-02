<?php if (isset($_GET['id_aluno'])) : ?>
	<?php foreach ($aluno -> buscar() as $aluno) : ?>
		<?php if ($aluno['id_aluno'] === $_GET['id_aluno']) : ?> 

			<h1>Editar aluno</h1>

			<form method="post" action="edita_aluno.php">
				<input type="hidden" name="id_aluno" value="<?= $aluno['id_aluno'] ?>">
				<label class="badge badge-secondary">Nome do aluno:</label>
				<input class="form-control" type="text" name="nome"	placeholder="Insira o nome do aluno" 
					value="<?= $aluno['nome'] ?>">
				<br>
				<label class="badge badge-secondary">Idade:</label>
				<input class="form-control"  type="text" name="idade" placeholder="Insira a data de nascimento" 
					value="<?= $aluno['idade'] ?>">
				<br>
				<label class="badge badge-secondary">E-mail:</label>
				<input class="form-control" type="email" name="email" placeholder="Insira o e-mail" value="<?= $aluno['email'] ?>">
				<br>
				<label class="badge badge-secondary">Interesse:</label>
				<select class="form-control" name="interesse">
					<option value="">Escolha o interesse</option>
					<option value="Esporte" <?= $aluno['interesse'] === 'Esporte' ? 'selected' : '' ?>>
						Esporte
					</option>
					<option value="Saúde" <?= $aluno['interesse'] === 'Saúde' ? 'selected' : '' ?>>
						Saúde
					</option>
					<option value="Jogos" <?= $aluno['interesse'] === 'Jogos' ? 'selected' : '' ?>>
						Jogos
					</option>
					<option value="Música" <?= $aluno['interesse'] === 'Música' ? 'selected' : '' ?>>
						Música
					</option>
					<option value="Informática" <?= $aluno['interesse'] === 'Informática' ? 'selected' : '' ?>>
						Informática
					</option>
				</select>
				<br>
				<label class="badge badge-secondary">Estado:</label>
				<input class="form-control" type="text" name="estado" placeholder="Insira o estado" value="<?= $aluno['estado'] ?>">
				<br>
				<button class="btn btn-success" type="submit">Editar aluno</button>
			</form>

			<?php if (isset($_GET['erro'])) : ?>
				<div class="alert alert-danger mt-3" role="alert">
					Você deve preencher todos os campos para editar o aluno.
				</div>
			<?php endif ?>
		<?php endif ?>
	<?php endforeach ?>
<?php else : ?>
	<script>
		location.href = 'index.php?pagina=alunos'
	</script>
<?php endif ?>
