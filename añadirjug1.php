<!DOCTYPE html>
<html>
<head>
    <title>Añadir jugador</title>
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

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"] {
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
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Añadir Jugador</h1>
        </header>
        <?php
            $id_equipo = $_GET["id_equipo"];
        ?>
        <form method="POST" action="añadirjug2.php">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="numero">Número:</label>
                <input type="number" name="numero" class="form-control" required>
            </div>
            <input type="hidden" name="id_equipo" value="<?php echo $id_equipo; ?>">
            <input type="submit" value="Añadir" name="Añadir" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
