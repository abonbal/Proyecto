<?php
  // Estableciendo la conexión
  require 'conexion.php';

  // Obtener el ID del equipo seleccionado desde el parámetro de la URL
  $id_equipo = $_GET["id"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Añadir Estadio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1>Añadir Estadio</h1>
    </header>
    <?php
        $id_equipo = $_GET["id"];
    ?>
    <form method="POST" action="añadirest2.php">
        <input type="hidden" name="id_equipo" value="<?php echo $id_equipo; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        
        <label for="capacidad">Capacidad:</label>
        <input type="number" name="capacidad" required min="0"><br>
        
        <label for="fundado">Año de fundación:</label>
        <input type="date" name="fundado" required><br>
    
        <div>
        <a href="index.php" class="btn btn-primary">Volver a la clasificación</a>
        <input type="submit" value="Añadir" name="Añadir" class="btn btn-success">
        </div>
    </form>
   
    
</body>
</html>
