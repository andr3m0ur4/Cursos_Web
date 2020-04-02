<h1 class="text-center">Bem-vindos à Cursos Web</h1>

<form method="post" action="login.php">
	<label class="badge badge-secondary">Usuário:</label>
	<input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
	<br>
	<label class="badge badge-secondary">Senha:</label>
	<input type="password" name="senha" placeholder="Digite a senha" class="form-control">
	<br>
	<button type="submit" class="btn btn-success">Entrar</button>
</form>

<?php if (isset($_GET['erro'])) : ?>
	<div class="alert alert-danger mt-3" role="alert">
		Usuário e/ou senha inválidos.
	</div>
<?php endif ?>