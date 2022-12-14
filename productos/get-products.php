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

$sql = "select * from Articulos";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $rows = array();
    while ($r= mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    print json_encode($rows);
} else {
    header('Location: sesion-usuario.html');
}

CloseCon($conn);
