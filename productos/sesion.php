<?php

include 'db.php';
ini_set("display_errors", 1);

$conn = OpenCon();

if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$user=$_GET['user'];
$password=$_GET['password'];

$sql = "SELECT user password from Users where  user='$user' && password='$password'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    header('Location: products.html');
} else {
    header('Location: login.html');
}

CloseCon($conn);
