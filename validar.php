<?php
require 'conexion.php';
session_start ();

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$_SESSION['usuario'] = $usuario;


$consulta = "SELECT * FROM nobo.esquema_gerencia
 WHERE usuario='$usuario' and contraseña='$password'";
$resultado = $mysqli->query($consulta);

//Guardamos la consulta en un Array
$row = mysqli_fetch_array($resultado);

if ($row['es_admin'] == '1') {//Inicio de sesión como admin

    header("Location:index.php");

    }
elseif ($row['es_admin'] == '0') {//Inicio de sesión como otro usuario

    header("Location:index-usu.php");

    }
else {
  echo '<script language = javascript>
  alert("Usuario o Password incorrecto, por favor verifique sus datos.")
  self.location = "login.php"
  </script>';
}



 ?>
