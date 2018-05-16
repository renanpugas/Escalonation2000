<?php

class Sjf {

	public function executaProcessos($processos): array {
		for($i = 0; $i < count($processos); $i++) {
		    for($j = 0; $j < count($processos) - 1; $j++) {
		       if($processos[$j][2] > $processos[$j + 1][2]) {	       	
		        	for($f = 0; $f <= 2; $f++) {
						$aux = $processos[$j][$f];
				        $processos[$j][$f] = $processos[$j + 1][$f];
				        $processos[$j + 1][$f] = $aux;
		        	}
		       }
		    }
		}
		return $processos;
	}

}

?>