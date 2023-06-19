<!DOCTYPE html>
<html>
<head>
    <title>Añadir entrenador</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
        }

        p {
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Añadir entrenador</h1>
    </header>
    
<?php
require 'conexion.php';

$id_equipo = $_POST["id_equipo"];

// Verificar si se ha enviado el formulario
if (isset($_POST["Añadir"])) {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $temporadas = $_POST['temporadas'];

    $sql = "INSERT INTO entrenador (Nombre, Temporadas, id_equipo) VALUES ('$nombre', '$temporadas', '$id_equipo')";

    if ($mysqli->query($sql)) {
        echo '
		<p class="alert alert-primary" role="alert">Entrenador añadido</p>
		<br>
		<a href="index.php" class="btn btn-primary">Regresar</a>';
    } else {
        echo "Error: " . $mysqli->error;
    }
}
?>

