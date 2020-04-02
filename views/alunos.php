<a class="btn btn-success mb-3" href="?pagina=inserir_aluno">Inserir novo aluno</a>

<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr>
			<th>Nome aluno</th>
			<th>Idade</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($db -> buscarAlunos() as $aluno) : ?>
			<tr>
				<td><?= $aluno['nome'] ?></td>
				<td><?= $aluno['idade'] ?></td>
				<td>
					<a href="?pagina=inserir_aluno&editar=<?= $aluno['id_aluno'] ?>">
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

</table>