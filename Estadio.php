<?php
  // Estableciendo la conexión
  require 'conexion.php';

  // Obtener el ID del equipo seleccionado desde el parámetro de la URL
  $id_equipo = $_GET["id"];

  $sql = "SELECT * FROM estadios WHERE id_equipo = $id_equipo";


  $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Estadio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
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
        <h1>Estadio</h1>
    </header>
    <div class="container">
        <h2>Detalles del estadio</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Capacidad</th>
                    <th>Año de fundación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($fila = $resultado->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $fila['Nombre']; ?></td>
                        <td><?php echo $fila['Capacidad']; ?></td>
                        <td><?php echo $fila['Fundado']; ?></td>
                        <td>
                            <a href="eliminarest.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Volver a la clasificación</a>
        <a href="añadirest1.php?id_equipo=<?php echo $id_equipo; ?>" class="btn btn-success">Añadir estadio</a>
    </div>

</body>
</

