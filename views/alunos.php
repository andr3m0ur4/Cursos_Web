<a class="btn btn-success mb-3" href="?pagina=inserir_aluno">Inserir novo aluno</a>

<div class="table-responsive">
	<table class="table table-hover table-striped" id="alunos">
		<thead>
			<tr>
				<th>Nome aluno</th>
				<th>Idade</th>
				<th>Interesse</th>
				<th>E-mail</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($aluno -> buscar() as $aluno) : ?>
				<tr>
					<td><?= $aluno['nome'] ?></td>
					<td><?= $aluno['idade'] ?></td>
					<td><?= $aluno['interesse'] ?></td>
					<td><?= $aluno['email'] ?></td>
					<td>
						<a href="?pagina=editar_aluno&id_aluno=<?= $aluno['id_aluno'] ?>">
							<span style="font-size: 1.2em; color: Dodgerblue;">
								<i class="fas fa-user-edit"></i>
							</span>
						</a>
					</td>
					<td>
						<a href="deleta_aluno.php?id_aluno=<?= $aluno['id_aluno'] ?>">
							<span style="font-size: 1.2em; color: Tomato;">
								<i class="fas fa-user-times"></i>
							</span>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>

		<?php if (isset($_GET['erro'])) : ?>
			<tfoot>
				<div class="alert alert-danger mt-3" role="alert">
					Não é possivel excluir este aluno, ele está matriculado em algum curso!
				</div>
			</tfoot>
		<?php endif ?>

	</table>
</div>