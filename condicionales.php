<?php

	//Sentencias if, else if y else

	$manzana = true;
	$durazno = false;
	$guayaba = true;

	if ($manzana == $durazno) {
		echo $manzana . 'tiene el mismo valor booleano que ' . $durazno;
	} else if ($durazno == $guayaba) {
		echo $durazno . 'tiene el mismo valor booleano que ' . $guayaba;
	} else {
		echo 'Se ejecutó la esntencia del else ya que no se cumplieron las condiciones anteriores';
	}
?>