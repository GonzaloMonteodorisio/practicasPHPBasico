<?php
	//Arrays
	//Una forma de crear un array
	$frutas = array('manzana', 'durazno', 'pera');

	for ($i = 0; $i < count($frutas); $i++) {
		echo $frutas[$i] . "&nbsp;" . "&nbsp;";
	}

	echo '<br><br>';

	foreach ($frutas as $key => $value) {
		echo 'Índice: ' . $key . ' - Valor: ' . $value . '<br><br>';
	}

	echo '<br><br>';

	//otra forma de crear un array
	$notas = array(
		'nota1' => 10,
		'nota2' => 8,
		'nota3' => 7,
		'nota4' => 2,
		'nota5' => 4,
		'nota6' => 9,
	);

		foreach ($notas as $key => $value) {
		echo 'Índice: ' . $key . ' - ' . $value . '<br><br>';
	}

?>