<html>
<head>
<title>Nueva venta</title>
</head>

<body>
	<?php
		$idt= $_GET['idTienda'];
		$ide= $_GET['idEmpleadoVentas'];
		$idc= $_GET['idComercialVentas'];
		$can= $_GET['cantidad'];
		
	// Conectamos con la base de datos
    $host = mysql_connect(DB_HOST, DB_USER, DB_PASS);
    mysql_select_db(DB_NAME, $host);

    // Insertamos en la base de datos.
    mysql_query("INSERT INTO vendeA (nCurso, numHora, capacidad) VALUES ('null','$idt','$ide','$idc', '$can')");

	?>
</body>
</html>
