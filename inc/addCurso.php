<?php
    require ('inc/conexion.inc.php');

    // Recogemos el contenido enviado desde formulario.
    $nCurso = isset($_POST['nCurso']) ? $_POST['nCurso'] : '';
    $numHora = isset($_POST['numHora']) ? $_POST['numHora'] : '';
    $capacidadCurso = isset($_POST['capacidadCurso']) ? $_POST['capacidadCurso'] : '';

    // Abrimos base de datos con funcion abrirDB de conexion.inc.php
    $db = openDB();

    // Preparamos la consulta.
    $stmt = $db->prepare('INSERT INTO curso(nCurso, numHora, capacidadCurso) VALUES(?,?,?)');
    $stmt->bind_param('sss',$nCurso, $numHora, $capacidadCurso);
    // Ejecutamos la consulta.
    $stmt->execute();

    // Cerramos la conexion con la base de datos
    $stmt->close();
    $db->close();

?>
