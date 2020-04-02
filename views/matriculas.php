<a class="btn btn-success mb-3" href="?pagina=inserir_matricula">Inserir nova matricula</a>

<table class="table table-hover table-striped" id="matriculas">
	<thead>
		<tr>
			<th>Nome do aluno</th>
			<th>Nome do curso</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($aluno_curso -> buscar() as $aluno_curso) : ?>
			<tr>
				<td><?= $aluno_curso['nome'] ?></td>
				<td><?= $aluno_curso['nome_curso'] ?></td>
				<td>
					<a href="deleta_matricula.php?id_aluno=<?= $aluno_curso['id_aluno'] ?>&id_curso=<?= $aluno_curso['id_curso'] ?>">
						<span style="font-size: 1.2em; color: Tomato;">
							<i class="fas fa-trash-alt"></i>
						</span>
					</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>