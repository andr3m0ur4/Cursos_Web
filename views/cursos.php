<a class="btn btn-success mb-3" href="?pagina=inserir_curso">Inserir novo curso</a>

<table class="table table-hover table-striped" id="cursos">
	<thead>
		<tr>
			<th>Nome curso</th>
			<th>Carga horária</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($curso -> buscar() as $curso) : ?>

			<tr>
				<td><?= $curso['nome_curso'] ?></td>
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

</table>