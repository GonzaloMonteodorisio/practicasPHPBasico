<?php
	//Sentencia switch
	$i = 1;

	switch ($i) {
		case 0: 
			echo 'i es igual a 0';
			break;
		case 1:
			echo 'i es igual a 1';
			break;	
		case 2:
			echo 'i es igual a 2';
			break;
		default:
			echo 'i no es igual a ningún caso';
			break;						
	}

	echo '<br>';

	$cadena = 'manzana';

	switch ($cadena) {
		case 'pera': 
			echo 'la palabra es igual a pera';
			break;
		case 'uva':
			echo 'la palabra es igual a durazno';
			break;	
		case 'banana':
			echo 'la palabra es igual a banana';
			break;
		default:
			echo 'la palabra no es ninguna de las anteriores';
			break;						
	}	
?>