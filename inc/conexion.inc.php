<?php

require_once('configuracion.inc.php');

// First conection
function abrirDB(){
    // Connect to the database using mysqli
    $db_server = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($db_server->connect_error) {
       die('Error de conexion (' . $db_server->connect_errno . ') '
        . $db_server->connect_error);
    }
    return $db_server;
}
