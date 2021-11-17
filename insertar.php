<?php
include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$ciudad=$_POST['ciudad'];
$correo=$_POST['correo'];


$sql="INSERT INTO empleado VALUES('$idempleado','$nombre','$apellido','$ciudad','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>