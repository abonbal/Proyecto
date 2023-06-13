<!DOCTYPE html>
<html>
<head>
    <title>Editar entrenador</title>
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
        <h1>Editar Entrenador</h1>
    </header>
    
    <?php
    // Estableciendo la conexión
    require 'conexion.php';

    // Obteniendo los datos del formulario
    $nombre = $_POST["nombre"];
    $temporadas = $_POST["temporadas"];
    $id_equipo = $_POST["id_equipo"];

    $sql ="UPDATE entrenador SET nombre='$nombre', Temporadas='$temporadas' WHERE id_equipo='$id_equipo'";

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