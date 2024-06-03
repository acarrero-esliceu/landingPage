<?php
//parametro de conexión
$servername="localhost";
$username="angel";
$passwork="12345";
$dbname="formacion";

//crear conexion
$conn=new mysqli_connect($servername,$username,$passwork,$dbname);

//comprobar conexion
if($conn->connect_error){
    die("conexion fallida".$conn->connect_error);
}
echo "conexion exitosa";
?>