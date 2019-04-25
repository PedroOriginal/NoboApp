<?php
require 'conexion.php';
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$_SESSION['usuario'] = $usuario;


$consulta = "SELECT * FROM nobo.esquema_gerencia WHERE usuario='$usuario' and contraseña='$password'";
$resultado = $mysqli->query($consulta);
$filas = mysqli_num_rows($resultado);

if ($filas>0) {

    header("location:index-usu.php");
    }else {
  echo "Error en la autenticacion";


mysqli_free_result($resultado);
}
 ?>
