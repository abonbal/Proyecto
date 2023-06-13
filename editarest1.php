<?php
  // Estableciendo la conexión
  require 'conexion.php';

  // Obtener el ID del equipo seleccionado desde el parámetro de la URL
  $id = $_GET["id"];

   $sql = "SELECT * FROM estadios WHERE id = $id";

   $resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Estadio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
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

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Editar Estadio</h1>
    </header>
    <div class="container">
        <?php

        $resultado = $mysqli->query($sql);
        while ($fila = $resultado->fetch_assoc()) {
            $nombre = $fila["Nombre"];
            $capacidad = $fila["Capacidad"];
            $fundado = $fila["Fundado"];
        }
        
        ?>
        <form method="POST" action="editarest2.php">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>

            <label for="nombre">Capacidad:</label>
            <input type="number" name="capacidad" value="<?php echo $capacidad; ?>"min="0"><br>
            
            <label for="puntos">Año de Fundacion:</label>
            <input type="text" name="fundado" require value="<?php echo $fundado; ?>"><br>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Actualizar" name="Añadir" class="btn btn-primary"> <a href="index.php" class="btn btn-secondary">Volver a la clasificación</a>
        </form>
        
    </div>
</body>
</html>