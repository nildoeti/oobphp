<?php
	// considerar revisar o código quando utilizando 3 ou mais nível encadeados
	// segundo Linux Torvalds

	// exemplo 1
	for ($i = 0; $i < 10; $i++)
	{
		for ($j = 0; $j < 9; $j++)
		{
			for ($k = 0; $k < 8; $k++)
			{
				// código aqui
			}
		}
	}

	// exemplo 1
	for($i = 0; $i <= 10; $i++) {
		// echo $i;
	}

	// exemplo 2
	for ($i = 0; ; $i++) {
		if ($i > 10) {
			break;
		}
		// echo $i;
	}

	// exemplo 3
	$i = 1;
	for (;;) {
		if ($i > 10) {
			break;
		}
		// echo $i;
		$i++;
	}

	// exemplo 4
/* exemplo 4 */
$n = 1;
for (;;) {
	if ($n > 10) {
		break;
	}
	// echo $n;
	$n++;
}

// exemplo 5
for ($m = 1, $n = 0; $m < 100; $n += $m, print $m, $m++);
