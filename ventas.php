<?php
include "conexion.php";

$resultado = $conexion->query("SELECT * FROM productos");

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>
            <td>{$fila['idProd']}</td>
            <td>{$fila['nombre']}</td>
            <td>{$fila['precio']}</td>
            <td>{$fila['existencia']}</td>
            <td><button class='eliminar' onclick='eliminarProducto({$fila['idProd']})'>Eliminar</button></td>
          </tr>";
}

$conexion->close();
?>
