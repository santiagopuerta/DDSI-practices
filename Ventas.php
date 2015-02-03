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
			
		include ('conexion.inc');	
		$consulta="Insert into vendeA values (null, '$idt', '$ide', '$idc', '$can') ";
		conexion('a2415958_ddsi', $consulta);	 //ejecutamos la consulta de alta
	?>
</body>
</html>
