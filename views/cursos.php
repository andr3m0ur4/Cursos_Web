<a class="btn btn-success mb-3" href="?pagina=inserir_curso">Inserir novo curso</a>

<div class="table-responsive">
	<table class="table table-hover table-striped" id="cursos">
		<thead>
			<tr>
				<th>Nome curso</th>
				<th>Investimento</th>
				<th>Carga horária</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($curso -> buscar() as $curso) : ?>

				<tr>
					<td><?= $curso['nome_curso'] ?></td>
					<td>R$ <?= $curso['investimento'] ?></td>
					<td><?= $curso['carga_horaria'] ?></td>
					<td>
						<a href="?pagina=editar_curso&id_curso=<?= $curso['id_curso'] ?>">
							<span style="font-size: 1.2em; color: Dodgerblue;">
								<i class="fas fa-edit"></i>
							</span>
						</a>
					</td>
					<td>
						<a href="deleta_curso.php?id_curso=<?= $curso['id_curso'] ?>">
							<span style="font-size: 1.2em; color: Tomato;">
								<i class="fas fa-trash-alt"></i>
							</span>
						</a>
					</td>
				</tr>

			<?php endforeach ?>
		</tbody>

		<?php if (isset($_GET['erro'])) : ?>
			<tfoot>
				<div class="alert alert-danger mt-3" role="alert">
					Não é possivel excluir este curso, existe um ou mais alunos matriculados nele!
				</div>
			</tfoot>
		<?php endif ?>

	</table>
</div>