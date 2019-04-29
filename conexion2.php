<?php
$mysqli = new mysqli("35.202.171.42", "apps_bua", "BUAtFxrGUa4N", "pruebadb_nobo");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";


?>
