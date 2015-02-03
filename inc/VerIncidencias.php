<?php
    require_once('config.inc.php');
    
    // Conectamos con la base de datos
    $host = mysql_connect(DB_HOST, DB_USER, DB_PASS);
    mysql_select_db(DB_NAME, $host);
 
    // Buscamos en la base de datos.
    $incidencias = mysql_query("SELECT * FROM `registrarIncidencia` LIMIT 0,10 ");
    
 
    echo "<table><tr><td>ID Cliente</td><td>ID Producto</td><td>Comentario</td><td> DNIPasaporte </td><td>NombrePersonaRegistra </td><td> Apellido2PersonaRegistra </td><td> Apellido2PersonaRegistra </td></tr>";
    while ($fila = mysql_fetch_array($incidencias, MYSQL_NUM)) {
        echo "<tr><td>'$fila[0]'</td><td>'$fila[1]'</td><td>'$fila[2]'</td><td>'$fila[3]'</td><td>'$fila[4]'</td><td>'$fila[5]'</td><td>'$fila[6]'</td><td>'$fila[7]'</td></tr>";
    }
    echo "</table>";
 
?>
