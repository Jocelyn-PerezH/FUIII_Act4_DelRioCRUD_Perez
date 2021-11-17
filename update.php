<?php

include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$ciudad=$_POST['ciudad'];
$correo=$_POST['correo'];

$sql="UPDATE empleado SET  nombre='$nombre',apellido='$apellido',ciudad='$ciudad',correo='$correo' WHERE idempleado='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>