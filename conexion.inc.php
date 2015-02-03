<?php

require_once('configuracion.inc.php');

// Funcion para primera conexion.
function abrirDB(){
    // conexion a la base de datos mediante mysqli
    $db_server = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($db_server->connect_error) {
       die('Error de conexion (' . $db_server->connect_errno . ') '
        . $db_server->connect_error);
    }
    return $db_server;
}
