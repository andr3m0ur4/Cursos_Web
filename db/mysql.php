<?php 

# Conexão com o Banco de Ddos MySQL ************************
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "aula_php";

$conexao = mysqli_connect ( $servidor, $usuario, $senha, $db )
	or die ( 'Erro ao conectar' );
/* 
# Criando tabelas usando PHP ****************************
# Tabelas Cursos (nome, carga horária)
$query = "CREATE TABLE cursos (
	id_curso int not null auto_increment primary key,
	nome_curso varchar ( 255 ) not null,
	carga_horaria int not null
)";

$executar = mysqli_query ( $conexao, $query );


# Tabela alunos (nome do aluno, data de nascimento)

$query = "CREATE TABLE alunos (
	id_aluno int not null auto_increment primary key,
	nome_aluno varchar ( 255 ) not null,
	data_nascimento varchar ( 255 ) not null
)";

$executar = mysqli_query ( $conexao, $query );

# Tabela alunos_cursos (aluno, curso)

$query = "CREATE TABLE alunos_cursos (
	id_aluno_curso int not null auto_increment primary key,
	id_aluno int not null,
	id_curso int not null
)";

$executar = mysqli_query ( $conexao, $query );



# Inserir dados nas tabelas **********************
$query = "INSERT INTO alunos ( nome_aluno, data_nascimento )
	VALUES ('Maria', '01-06-1991' )";

$executar = mysqli_query ( $conexao, $query );

$query = "INSERT INTO alunos ( nome_aluno, data_nascimento )
	VALUES ('Jose', '01-01-1990' )";

$executar = mysqli_query ( $conexao, $query );

$query = "INSERT INTO cursos ( nome_curso, carga_horaria )
	VALUES ('PHP e MySQL', 10 )";

$executar = mysqli_query ( $conexao, $query );

$query = "INSERT INTO alunos_cursos ( id_aluno, id_curso )
	VALUES ( 8, 1 )";

$executar = mysqli_query ( $conexao, $query );

if ( mysqli_query ( $conexao, "DELETE FROM alunos WHERE id_aluno = 4 OR id_aluno = 5 OR id_aluno = 6 OR id_aluno = 7 or id_aluno = 9 or id_aluno = 10" ) ) {
	echo "Apagado ncom sucesso!";
} else {
	echo "Falha ao apagar dados!";
}


if ( mysqli_query ( $conexao, "UPDATE alunos SET nome_aluno = 'Jose Miguel' 
						WHERE id_aluno = 3" ) ) {
	echo "Alterado com sucesso";
}

if ( mysqli_query ( $conexao, "UPDATE alunos SET nome_aluno = 'Maria Capitolina' 
						WHERE id_aluno = 2" ) ) {
	echo "Alterado com sucesso";
}

echo '<table border=1>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Data de Nascimento</th>
		</tr>';
$consulta = mysqli_query ( $conexao, "SELECT * FROM alunos" );

while ( $linha = mysqli_fetch_assoc ( $consulta ) ) {
	echo "<tr>
			<td>{$linha['id_aluno']}</td>
			<td>{$linha['nome_aluno']}</td>
			<td>{$linha['data_nascimento']}</td>
		</tr>";
}
echo '</table>';


mysqli_query ( $conexao, "ALTER TABLE cursos CHANGE id id_curso int not null auto_increment" );


$consulta = mysqli_query ( $conexao, "SELECT alunos.nome_aluno, cursos.nome_curso 
										FROM alunos, cursos, alunos_cursos
										WHERE alunos.id_aluno = alunos_cursos.id_aluno 
										AND alunos_cursos.id_curso = cursos.id_curso" );

echo '<table border=1>
		<tr>
			<th>Nome do aluno</th>
			<th>Nome do Curso</th>
		</tr>';
while ( $linha = mysqli_fetch_assoc ( $consulta ) ) {
	echo "<tr>
			<td>{$linha['nome_aluno']}</td>
			<td>{$linha['nome_curso']}</td>
		</tr>";
}
*/