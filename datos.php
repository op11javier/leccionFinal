<?php
require_once 'conexion.php';
$n= "usuario";
$p= "clave";
$Nombre = $_GET['Nombre'];

$Password = $_GET['Password'];

if ($Nombre == $n and $Password == $p)
{
echo "Usuario:  ";
echo $Nombre;
echo nl2br(" \n ");
echo nl2br(" \n ");
//conexion a la base 
$cone = new conexion();

require_once 'formulario.php';

}
else {
echo "usuario o contraseña incorrectos";
}

?>





