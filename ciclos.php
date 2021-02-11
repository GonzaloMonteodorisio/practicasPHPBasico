<?php
	//Ciclos o bucles
	//for
	//$i++ = +1
	
	echo 'ciclo for <br>';


	for ($i = 0; $i < 10; $i++) {
		echo $i . '  ';
	}

	echo '<br><br>';

	//while

	echo 'ciclo while <br>';

	$j = 1;

	while ($j <= 10) {
		echo $j . '  ';
		$j++; 
	}

	echo '<br><br>';

	//do while

	echo 'ciclo do while <br>';

	$k = 0;

	do {
		echo $k . '  ';
		$k++;
	} while ($k < 10); 
?>