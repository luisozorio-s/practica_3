<?php
include "conexion.php";

if (isset($_GET["idProd"])) {
    $idProd = intval($_GET["idProd"]);
    $stmt = $conexion->prepare("DELETE FROM productos WHERE idProd = ?");
    $stmt->bind_param("i", $idProd);

    if ($stmt->execute()) {
        echo "Producto eliminado correctamente.";
    } else {
        echo "Error al eliminar: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "ID de producto no válido.";
}
$conexion->close();
?>
