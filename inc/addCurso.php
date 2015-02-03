<?php
    require_once('config.inc.php');

    // Recogemos el contenido enviado desde formulario.
    $nCurso = isset($_POST['nCurso']) ? $_POST['nCurso'] : '';
    $numHora = isset($_POST['numHora']) ? $_POST['numHora'] : '';
    $capacidadCurso = isset($_POST['capacidadCurso']) ? $_POST['capacidadCurso'] : '';

    // Conectamos con la base de datos
    $host = mysql_connect(DB_HOST, DB_USER, DB_PASS);
    mysql_select_db(DB_NAME, $host);

    // Insertamos en la base de datos.
    mysql_query("INSERT INTO Curso (nCurso, numHora, capacidad) VALUES ('$nCurso','$numHora','$capacidadCurso')");
?>
