<?php

function hacerFactura($nombre_cliente, $producto, $precio) {
    $descuento = $precio * (10 / 100);
    $sub_total = $precio - $descuento;
    $iva = $sub_total * 0.12;
    $total = $sub_total + $iva;
    
    $resultado = "FACTURA\n";
    $resultado .= "Nombre: $nombre\n";
    $resultado .= "Productos:\n";
    foreach ($producto as $producto1) {
        $resultado .= "- $producto1\n";
    }
    $resultado .= "Total: \$$total\n";

    // Devuelve la factura
    return $resultado;
}

// Datos del cliente y los productos comprados
$nombre_cliente = "Juan";
$productos_comprados = ["Camisa", "Pantalón", "Zapatos"];
$precio_total_sin_impuestos = 1000;

$factura = hacerFactura($nombre_cliente, $productos_comprados, $precio_total_sin_impuestos);

echo $factura;

?>
