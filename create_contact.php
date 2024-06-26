<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']=="POST"){

    echo "CREANDO CONTACTO NUEVO <BR>";
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
    
    echo "NOMBRE: ".$nombre."<br>";
    echo "TELEFONO: ".$telefono."<br>";
    echo "CORREO: ".$correo."<br>";
    echo "MENSAJE: ".$mensaje."<br>" ;
    $sql="INSERT INTO contactos (nombre,telefono,correo,mensaje) VALUES (?,?,?,?);";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("ssss",$nombre,$telefono,$correo,$mensaje);
    $result = $stmt->execute();

    if($result){
        $stmt->close();
        $conn->close();
        echo "CONTACTO CREADO";
        header("Location: contacto.php?status=success&msg=Mensaje Guardado!");

    }else{
        echo "ERROR AL CREAR CONTACTO";
    }

}else{
    echo "ERROR EN METODO POST";
    header("Location: contacto.php?status=error&msg=Error Guardando Mensaje!");
}