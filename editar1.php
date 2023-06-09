<?php
  // Estableciendo la conexión
  require 'conexion.php';

  // Obtener el ID del equipo seleccionado desde el parámetro de la URL
  $id_equipo = $_GET["id"];

   $sql = "SELECT * FROM equipos WHERE id_equipo = $id_equipo";

   $resultado = $mysqli->query($sql);
   if($fila = $resultado->fetch_assoc()) {
    $nombre=$fila["Nombre"];
    $puntos=$fila["Puntos"];

   }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar equipo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <h1>Editar equipo</h1>
    </header>
    <div class="container">
        <?php
        // Estableciendo la conexión
        require 'conexion.php';

        // Obtener el ID del equipo seleccionado desde el parámetro de la URL
        $id_equipo = $_GET["id"];

        $sql = "SELECT * FROM equipos WHERE id_equipo = $id_equipo";

        $resultado = $mysqli->query($sql);
        if($fila = $resultado->fetch_assoc()) {
            $nombre = $fila["Nombre"];
            $puntos = $fila["Puntos"];
        }
        
        if (isset($_POST["Añadir"])) {
            // Obtener los datos del formulario
            $nombre = $_POST['nombre'];
            $puntos = $_POST['puntos'];
            $id_equipo = $_POST['id_equipo'];

            $sql = "UPDATE equipos SET Nombre='$nombre', Puntos='$puntos' WHERE id_equipo=$id_equipo";

            if ($mysqli->query($sql)){
                echo "<p>Registro actualizado exitosamente.</p>";
            } else {
                echo "Error: " . $mysqli->error;
            }
        }
        ?>
        <form method="POST" action="editar2.php">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>
            
            <label for="puntos">Puntos:</label>
            <input type="text" name="puntos" value="<?php echo $puntos; ?>"><br>
            <input type="hidden" name="id_equipo" value="<?php echo $id_equipo; ?>">
            <input type="submit" value="Actualizar" name="Añadir" class="btn btn-primary">
        </form>
        <a href="index.php" class="btn btn-secondary">Volver a la clasificación</a>
    </div>
</body>
</html>
