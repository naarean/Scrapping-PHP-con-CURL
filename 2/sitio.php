<html>
	<head>
		<title>Sitio</title>
	</head>
<body>
	<?php
		$variable_control = $_COOKIE['control'];
		if ($variable_control != 1234) {
			echo "Error";
		}
		else {
			echo "Has entrado";
	?>
	
	<h1>Hola que tal.</h1>
	<h2>Bienvenido al sitio</h2>
	<p>Fecha 11/01/2012</p>

	<?php
		}
	?>
</body>
</html>