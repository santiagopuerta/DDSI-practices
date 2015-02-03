<html>
<head>
<title>Producto</title>
</head>

<body>
	<?php
		$idp= $_GET['idProducto'];
		$idf= $_GET['idFabrica'];
		$ide= $_GET['idEmpleado'];
		
			
		include ('conexion.inc');	
		$consulta="Insert into producto values (null, '$idp', '$idf', '$ide') ";
		conexion('a2415958_ddsi', $consulta);	 //ejecutamos la consulta de alta
	?>
</body>
</html>
