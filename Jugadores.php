<?php
  //estableciendo conexion
  require 'conexion.php';

  //obtener el id del equipo seleccionado desde el parámetro de la URL
  $id = $_GET["id"];

  //preparar la sentencia sql para obtener los jugadores del equipo seleccionado
  $sql = "SELECT * FROM jugadores WHERE id_equipo = $id";

  //ejecutar la sentencia y guardar el resultado
  $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jugadores</title>
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
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .btn {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Jugadores</h1>
        </header>
        <h2>Jugadores del equipo</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Número</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $fila['Nombre']; ?></td>
                        <td><?php echo $fila['Numero']; ?></td>
                        <td><a href="editarjug.php?id=<?php echo $fila['id']?>" class="btn btn-warning">Editar jugador</a></td>
                        <td>
                            <a href="eliminarjug.php?id='<?php echo $fila['id'];?>'" class="btn btn-danger">Eliminar Jugador</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Volver a la clasificación</a>
        <a href="añadirjug1.php?id_equipo=<?php echo $id; ?>" class="btn btn-success">Añadir Jugador</a>
    </div>
</body>
</html>
