<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $edad = isset($_GET['edad']) ? $_GET['edad'] : '';
    $direccion = isset($_GET['direccion']) ? $_GET['direccion'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $comentario = isset($_GET['comentario']) ? $_GET['comentario'] : '';
    $errors = array();

    if (empty($name)) {
        $errors[] = "Nombre es obligatorio.";
    }

    if (empty($email)) {
        $errors[] = "Email es obligatorio.";
    }
    if (empty($direccion)) {
        $errors[] = "Direccion es obligatorio.";
    }
    if (empty($edad)) {
        $errors[] = "Edad es obligatorio.";
    }

    // Mostrar mensajes de error si hay campos vacíos
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Mostrar los datos si todo está bien
        echo "Nombre: $name<br>";
        echo "Email: $email<br>";
        echo "Edad: $edad<br>";
        echo "Direccion: $direccion<br>";
        echo "Comentario: $comentario<br>";
    }
} else {
    echo "El formulario no se envió correctamente.";
}
?>

