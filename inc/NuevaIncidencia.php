<?php
    require_once('config.inc.php');
    // Recogemos el contenido enviado desde formulario.
    $idCliente = isset($_POST['idCliente']) ? $_POST['idCliente'] : '';
    $idProducto = isset($_POST['idProducto']) ? $_POST['idProducto'] : '';
    $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : '';
    $DNIPasaporte = isset($_POST['DNIPasaporte']) ? $_POST['DNIPasaporte'] : '';
    $NombrePersonaRegistra = isset($_POST['NombrePersonaRegistra']) ? $_POST['NombrePersonaRegistra'] : '';
    $Apellido1PersonaRegistra = isset($_POST['Apellido1PersonaRegistra']) ? $_POST['Apellido1PersonaRegistra'] : '';
    $Apellido2PersonaRegistra = isset($_POST['Apellido2PersonaRegistra']) ? $_POST['Apellido2PersonaRegistra'] : '';

    // Conectamos con la base de datos
    $host = mysql_connect(DB_HOST, DB_USER, DB_PASS);
    mysql_select_db(DB_NAME, $host);
    // Insertamos en la base de datos.
    mysql_query("INSERT INTO registrarIncidencia (idCliente, idProducto, comentario, DNIPasaporte, NombrePersonaRegistra, Apellido1PersonaRegistra, Apellido2PersonaRegistra) VALUES ('$idCliente','$idProducto','$comentario', '$DNIPasaporte', '$NombrePersonaRegistra', '$Apellido1PersonaRegistra', '$Apellido2PersonaRegistra')");
?>

