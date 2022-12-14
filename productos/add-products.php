<?php

include "db.php";
ini_set("display_errors", 1);

$conn = OpenCon();

if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit();
}

$stock = $_POST["stock"];
$price = $_POST["price"];
$restocked = $_POST["restocked"];
$description = $_POST["description"];

$sql = "INSERT INTO Articulos(existencia,precio,resurtido,descripcion) VALUES ('$stock','$price','$restocked','$description')";
if (mysqli_query($conn, $sql)) {
    header("Location: products.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

CloseCon($conn);
