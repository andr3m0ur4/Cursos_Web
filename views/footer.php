		</div>

		<footer class="navbar fixed-bottom">
			<div class="container-fluid navbar-brand justify-content-center">
		 		<small>©2020 Cursos Web - Todos os direitos reservados.</small>
		 	</div>
		</footer>

		<script src="js/jquery.js"></script>
	 	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	 	<script src="//cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"></script>
	 	<script src="js/Portuguese-Brasil.js"></script>
	 	<script>
	 		$(document).ready( function () {
			    $('#cursos').DataTable(data)
			    $('#alunos').DataTable(data)
			    $('#matriculas').DataTable(data)
			})
	 	</script>
	</body>
</html>