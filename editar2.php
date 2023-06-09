<!DOCTYPE html>
<html>
<head>
    <title>Editar equipo</title>
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
        <h1>Editar equipo</h1>
    </header>
    
    <?php
    // Estableciendo la conexión
    require 'conexion.php';

    // Obteniendo los datos del formulario
    $nombre = $_POST["nombre"];
    $puntos = $_POST["puntos"];
    $id_equipo = $_POST["id_equipo"];

    $sql ="UPDATE equipos SET nombre='$nombre', puntos='$puntos' WHERE id_equipo='$id_equipo'";

    if ($mysqli->query($sql)) {
        echo "<p>Registro modificado exitosamente.</p>";
    } else {
        echo "Error: " . $mysqli->error;
    }
    ?>

    <a href="index.php">Volver a la clasificación</a>
</body>
</html>
