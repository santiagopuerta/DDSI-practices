<?php
    require_once('config.inc.php');

    // Conectamos con la base de datos
    $host = mysql_connect(DB_HOST, DB_USER, DB_PASS);
    mysql_select_db(DB_NAME, $host);

    // Insertamos en la base de datos.
    $cursos = mysql_query("SELECT * FROM  `Curso` LIMIT 0 , 30");
    // echo $cursos.size();
    echo "<table><tr><td>ID Curso</td><td>Nombre curso</td><td>Num. horas</td><td>Capacidad</td></tr>";
    while ($fila = mysql_fetch_array($cursos, MYSQL_NUM)) {
        echo "<tr><td>'$fila[0]'</td><td>'$fila[1]'</td><td>'$fila[2]'</td><td>'$fila[3]'</td></tr>";
    }
    echo "</table>";
?>
