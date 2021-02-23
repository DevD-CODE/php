	<?php
		$test = "Hola mundo"; // Definimos variable
		// Creamos una funcion
		function getTest() {
			global $test; // La hacemos interactuar con ella
			echo $test; // Mostramos "test"
		}

		getTest(); // Invocamos a nuestra funcion
	?>