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
print json_encode($_POST);
// if (in_array("nombre", $_POST) == false) {
//     echo 22222;
// return;
// }
// $usuario = $_POST["usuario"];
// $contraseña = $_POST["contraseña"];

// $sql = "INSERT INTO Usuarios(nombre_usuario, usuario, contraseña_usuario) VALUES ('$nombre','$usuario','$contraseña')";
// if (mysqli_query($conn, $sql)) {
//     header("Location: sesion-usuario.html");
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

CloseCon($conn);
