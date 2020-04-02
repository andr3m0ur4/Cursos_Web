<?php if ( !isset ( $_GET['editar'] ) ) { ?>

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


<?php 
} else {
	while ( $linha = mysqli_fetch_assoc ( $consulta_cursos ) ) {
		if ( $linha['id_curso'] == $_GET['editar'] ) {
?>
			<h1>Editar curso</h1>
			<form method="post" action="edita_curso.php">
				<input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
				<br>
				<label class="badge badge-secondary">Nome curso:</label><br>
				<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" 
					value="<?php echo $linha['nome_curso']; ?>">
				<br><br>
				<label class="badge badge-secondary">Carga horária</label><br>
				<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária"
					value="<?php echo $linha['carga_horaria']; ?>"><br><br>
				<input class="btn btn-success" type="submit" value="Editar curso">
			</form>
		<?php 
		}
	}
} 
?>
