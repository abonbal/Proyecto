<?php
require 'conexion.php';

// Verificar si se ha enviado el formulario
if (isset($_POST["Añadir"])) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $capacidad = $_POST['capacidad'];
    $fundacion = $_POST['fundacion'];
    $id_equipo = $_POST['id_equipo'];
    
    $sql = "INSERT INTO estadios (nombre, capacidad, fundado, id_equipo) VALUES ('$nombre', '$capacidad', '$fundacion', '$id_equipo')";

    if ($mysqli->query($sql)){
        echo "<p>Registro añadido exitosamente.</p>";
    } else {
        echo "Error: " . $mysqli->error;
    }
    }

?>
<a href="index.php">Volver a clasificacion</a>
	