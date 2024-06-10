<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $sql = "DELETE FROM contactos WHERE id=$id";
    $result=$conn->query($sql);
    header("Location: leer.php");
}
?>