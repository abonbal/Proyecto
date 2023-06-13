<?php
  // Estableciendo la conexión
  require 'conexion.php';

  // Obtener el ID del equipo seleccionado desde el parámetro de la URL
  $id_equipo = $_GET["id"];

   $sql = "SELECT * FROM entrenador WHERE id_equipo = $id_equipo";

   $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Entrenador</title>
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

        h2 {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        thead {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Entrenador</h1>
    </header>
    <div class="container">
        <h2>Detalles del entrenador</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Temporadas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($fila = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $fila['Nombre']; ?></td>
                        <td><?php echo $fila['Temporadas']; ?></td>
                        <td>
                            <a href="eliminaren.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                        <td><a href="editaren.php?id=<?php echo $fila['id']?>" class="btn btn-warning">Editar entrenador</a></td>
                    </tr>
                    
                    <?php
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Volver a la clasificación</a>
        <a href="añadiren1.php?id_equipo=<?php echo $id_equipo; ?>" class="btn btn-success">Añadir entrenador</a>
    </div>
</body>
</html>

