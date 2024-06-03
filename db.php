<?php
//parametro de conexión
$servername="localhost";
$username="angel";
$passwork="12345";
$dbname="formacion";

//crear conexion
$conn=new mysqli($servername,$username,$passwork,$dbname);

//comprobar conexion
if($conn->connect_error){
    //la conexion ha ido mal
    die("Connection failed: ". $conn->connect_error);
}

//echo "conexion exitosa";