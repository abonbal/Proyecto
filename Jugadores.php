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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
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
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        thead {
            background-color: #f9f9f9;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a.btn {
            margin-right: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-primary:focus, .btn-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-danger:focus, .btn-danger.focus {
            box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
        }
    </style>
</head>
<body>
    <header>
        <h1>Jugadores</h1>
    </header>
    <div class="container">
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
                <?php while ($fila = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $fila['Nombre']; ?></td>
                        <td><?php echo $fila['Numero']; ?></td>
                        <td>
                            <a href="eliminarjug.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger">Eliminar Jugador</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Volver a la clasificación</a>
        <a href="añadirjug1.php?id_equipo=<?php echo $id_equipo; ?>" class="btn btn-primary">Añadir Jugador</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        });
    </script>
</body>
</html>
