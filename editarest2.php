<!DOCTYPE html>
<html>
<head>
    <title>Editar Estadio</title>
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
        <h1>Editar estadio</h1>
    </header>
    
    <?php
    // Estableciendo la conexión
    require 'conexion.php';

    // Obteniendo los datos del formulario
    $nombre = $_POST["nombre"];
    $capacidad = $_POST["capacidad"];
    $fundado = $_POST["fundado"];
    $id = $_POST["id"];

    $sql ="UPDATE estadios SET nombre='$nombre', capacidad='$capacidad', fundado='$fundado' WHERE id='$id'";

    if ($mysqli->query($sql)) {
        echo '
		<p class="alert alert-primary" role="alert">Registro editado</p>
		<br>
		<a href="index.php" class="btn btn-primary">Regresar</a>';
    } else {
        echo "Error: " . $mysqli->error;
    }
    ?>

</body>
</html>