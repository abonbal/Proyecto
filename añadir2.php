<!DOCTYPE html>
<html>
<head>
    <title>Añadir equipo</title>
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
            display: block;
            width: fit-content;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Añadir equipo</h1>
    </header>

    <?php
    require 'conexion.php';

    // Verificar si se ha enviado el formulario
    if (isset($_POST["Añadir"])) {
        // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $puntos = $_POST['puntos'];

        $sql = "INSERT INTO equipos (Nombre, Puntos) VALUES ('$nombre', '$puntos')";

        if ($mysqli->query($sql)){
            echo "<p>Registro añadido exitosamente.</p>";
        } else {
            echo "Error: " . $mysqli->error;
        }
    }
    ?>

    <a href="index.php">Volver a la clasificacion</a>
</body>
</html>

