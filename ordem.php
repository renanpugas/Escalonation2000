<?php
	require_once 'sjf.php';

	$processos = array();

	$sjf = new sjf();

	//captura os dados enviados pelo usuário
	for ($i=0; $i < 5 ; $i++) { 
		$teste = "processo$i";
		$processos[$i][0] = $_POST[$teste];
		$teste = "prioridade$i";
		$processos[$i][1] = $_POST[$teste];
		$teste = "tempoRestante$i";
		$processos[$i][2] = $_POST[$teste];
	}

	//chama o método executaProcessos do algoritmo SJF
	//e guarda o valor em uma nova array
	$sjfProcessos = $sjf->executaProcessos($processos);
?>

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
				<div class="row">
					<div class="col-sm-6 mt-2">
						<div class="card">
							<div class="card-body">
							    <h3 class="card-title">FIFO</h3>
									<table class="table">
										<thead>
											<tr>
												<th scope="col">Nome</th>
												<th scope="col">Prioridade</th>
												<th scope="col">Tempo Total</th>
											</tr>
										</thead>
										<tbody>
										<?php		
											for($i = 0; $i < count($processos); $i++) {
												echo "<tr>";
												echo "<td>{$processos[$i][0]}</td>";
												echo "<td>{$processos[$i][1]}</td>";
												echo "<td>{$processos[$i][2]}</td>";
												echo "</tr>";
											}
										?>
										</tbody>
									</table>							    	
							</div>
						</div>
					</div>



					<div class="col-sm-6 mt-2">
						<div class="card">
							<div class="card-body">
							    <h3 class="card-title">SJF - (Shortest Job First)</h3>
							    <table class="table">
							    	<thead>
							    		<tr>
							    			<th scope="col">Nome</th>
							    			<th scope="col">Prioridade</th>
							    			<th scope="col">Tempo Total</th>
							    		</tr>
							    	</thead>
							    	<tbody>
							    		<?php		
											for($i = 0; $i < count($sjfProcessos); $i++) {
												echo "<tr>";
												echo "<td>{$sjfProcessos[$i][0]}</td>";
												echo "<td>{$sjfProcessos[$i][1]}</td>";
												echo "<td>{$sjfProcessos[$i][2]}</td>";
												echo "</tr>";
											}
										?>	
							    	</tbody>
							    </table>
							</div>
					    </div>
					</div>
				</div>
					<?php
					/*
					echo "<h1>FIFO: </h1>";
					for ($i=0; $i < 5 ; $i++) { 
						echo "Nome Processo: ".$processos[$i][0]." Prioridade: ".$processos[$i][1]." Tempo Restante: ".$processos[$i][2]."<br>";
					}

					echo "<h1>Shortest Job First (SJF)</h1>";

					$sjf->executaProcessos($processos);	
					*/
				?>		

			</div>
		</div>
	</div>
</body>
</html>