<?php
// Asegurar que responda de forma limpia
header('Content-Type: text/plain; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['carro'])) {
        $carroSeleccionado = htmlspecialchars($_POST['carro']);
        
        // Aquí podrías guardar la elección en una base de datos o sesión si quisieras.
        // Por ahora, devolvemos un mensaje personalizado.
        echo "¡Excelente elección! Has seleccionado el " . $carroSeleccionado . ". El servidor PHP ha procesado tu orden con éxito.";
    } else {
        echo "Error: No se recibió ningún modelo de carro.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
