<?php 
	$salario = 1020;
	$tempo_servico = 12;
	$tempo_reclamacao = false;
	
	// if ($salario > 1000)
	// {
		// if ($tempo_servico >= 12)
		// {
			// if ($tempo_reclamacao != true)
			// {
				// echo 'parabéns, aprovado.';	
			// }
		// }
	// }

		// exemplo 2
		if (($salario > 1000) and ($tempo_servico >= 12) and ($tempo_reclamacao != true))
		{
			echo 'parabéns, aprovado';
		}
?>
