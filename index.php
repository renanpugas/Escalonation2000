<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Simulador de Escalonador</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class='navbar navbar-dark bg-dark'>
			<a class='navbar-brand mx-auto' href='#''><h1>Escalonation 2000</h1></a>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-12">
			
				<form action="ordem.php" method="POST">
					<?php
						for($i = 0; $i < 5; $i++) {
						echo "<legend>Processo $i</legend>";
							echo "<div class='form-row'>";	
														
								echo "<div class='col-4'>";									
									echo "<input type='text'  class='form-control form-control-sm' name='processo$i' placeholder='Nome do Processo'> <br>";
								echo "</div>";

								echo "<div class='col-2'>";
									echo "<input type='number'  class='form-control form-control-sm' name='prioridade$i' placeholder='Prioridade do Processo' min='1' max='5'> <br>";
								echo "</div>";

								echo "<div class='col-3'>";
									echo "<input type='number'  class='form-control form-control-sm' name='tempoRestante$i' placeholder='Tempo Restante do processo' min='1' max='20'> <br>";
								echo "</div>";
							echo "</div>";			
						}
						
					?>
					<input type="submit" class="btn btn-info">
				</form>

			</div>
		</div>
	</div>
</body>
</html>