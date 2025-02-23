<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idProd = isset($_POST["idProd"]) ? intval($_POST["idProd"]) : 0;
    $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
    $precio = isset($_POST["precio"]) ? floatval($_POST["precio"]) : 0;
    $existencia = isset($_POST["existencia"]) ? intval($_POST["existencia"]) : 0;

    if ($idProd > 0 && !empty($nombre) && $precio > 0 && $existencia >= 0) {
        $stmt = $conexion->prepare("INSERT INTO productos (idProd, nombre, precio, existencia) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isdi", $idProd, $nombre, $precio, $existencia);

        if ($stmt->execute()) {
            echo "Registro exitoso.";
        } else {
            echo "Error en la consulta: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Datos inválidos. Verifica los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
$conexion->close();
?>
