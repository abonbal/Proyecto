<!DOCTYPE html>
<html>
<head>
    <title>Añadir Entrenador</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1>Añadir Entrenador</h1>
    </header>
    <?php
        $id_equipo = $_GET["id"];
    ?>
    <form method="POST" action="añadiren2.php">
        <input type="hidden" name="id_equipo" value="<?php echo $id_equipo; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        
        <label for="temporadas">Temporadas:</label>
        <input type="number" name="temporadas" required min="0"><br>
        
        <div>
            <a href="index.php" class="btn btn-primary">Volver a la clasificación</a>
            <input type="submit" value="Añadir" name="Añadir" class="btn btn-success">
        </div>
    </form>
    
</body>
</html>
